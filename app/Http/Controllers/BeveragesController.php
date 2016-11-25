<?php

namespace App\Http\Controllers;

use App\Beverage;
use App\Beverages_has_ingredient;
use App\Beverages_has_liqueur;
use App\Http\Requests;
use App\Image;
use App\Ingredient;
use App\Ingredients_type;
use App\Liqueurs_type;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class BeveragesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beverages = Beverage::all();
        $beverages->each(function($beverages){
            $beverages->imag;
        });

        return view('admin.beverages.index')
            ->with('beverages', $beverages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients_types = Ingredients_type::lists('tipo_ingrediente', 'id');
        $liqueurs_types = Liqueurs_type::lists('tipo_licor', 'id');

        return view('admin.beverages.create', compact('ingredients_types', 'liqueurs_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //--  Manipulando la imagen
        if($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'berevage_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/beverages/';
            $file->move($path, $name);

            $image = new Image();
            $image->imagen = $name;
            $image->save();
        }
        $beverage = new Beverage($request->all());
        $beverage->image_id = $image->id;
        $beverage->save();

        foreach ($request->id_ingredientes as $key => $ingrediente) {

            $receta = new Beverages_has_ingredient();

            $receta->beverage_id = $beverage->id;
            $receta->ingredient_id = $ingrediente;
            $receta->cantidad_ingrediente = $request->cantidades_i[$key];
            $receta->unit_id = $request->unidades_i[$key];

            $receta->save();
        }

        if($request->id_licores){

            foreach ($request->id_licores as $key => $licor) {

                $receta = new Beverages_has_liqueur();

                $receta->beverage_id = $beverage->id;
                $receta->liqueur_id = $licor;
                $receta->cantidad_licor = $request->cantidades_l[$key];
                $receta->unit_id = $request->unidades_l[$key];

                $receta->save();
            }
        }

        Flash::success('<strong>Perfecto </strong> el trago '. $beverage->trago .' se creo correctamente.');

        return redirect('admin/tragos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $beverage = Beverage::find($id);

      $ingredientes = $beverage->Ingredientes()->get();
      $licores = $beverage->Licores()->get();
      $unidades_licores = $beverage->UnidadesLicores()->get();
      $unidades_ingredientes = $beverage->UnidadesIngredientes()->get();

     return view('admin.beverages.show', compact('beverage', 'ingredientes', 'licores', 'unidades_licores', 'unidades_ingredientes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beverage = Beverage::find($id);
        $beverage->each(function($beverage){
            $beverage->ingredients;
            $beverage->receta;
        });
        return view('admin.beverages.edit')->with('berevage', $beverage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $beverage = Beverage::findOrFail($id);
      $ingredientes = $beverage->Ingredientes()->get();
      $licores = $beverage->Licores()->get();
      $beverage->Ingredientes()->detach();
      $beverage->Licores()->detach();
      foreach($ingredientes as $key => $ingrediente)
      {
        $beverage->Ingredientes()->attach([$ingrediente->id => ['cantidad_ingrediente' => $request->cantidad_i[$key], 'unidad_id' => $request->units[$key]]]);
      }

      if($request->cantidad_l){
        foreach($licores as $key => $licor)
        {
          $beverage->Licores()->attach([$licor->id => ['cantidad_licor' => $request->cantidad_l[$key], 'unit_id' => $request->units_l[$key]]]);
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
