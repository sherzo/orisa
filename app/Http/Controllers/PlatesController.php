<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plate;
use App\Ingredient;
use App\Ingredients_type;
use App\Liqueurs_type;
use App\Unit;
use Laracasts\Flash\Flash;
use App\Plates_has_ingredient;
use App\Plates_has_liqueur;
use App\Image;

use App\Http\Requests;

class PlatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $plates = Plate::all();
        $plates->each(function($plates){
            $plates->image;
        });
        return view('admin.plates.index')
            ->with('plates', $plates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        
        /*$ingredients = Ingredient::name($request->get('name'))->orderBy('ingrediente', 'ASC')->paginate(5);
        */

        $ingredients_types = Ingredients_type::lists('tipo_ingrediente', 'id');
        $liqueurs_types = Liqueurs_type::lists('tipo_licor', 'id');

 
        return view('admin.plates.create', compact('ingredients_types', 'liqueurs_types'));
        
        
    }


    public function addIngredient(Request $request) {

      
    

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'orisa_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/plates/';
            $file->move($path, $name);

            $image = new Image();
            $image->nombre = $name;
            $image->direccion = $path.$name;
            $image->save();
        }



        $plate = new Plate($request->all());
        $plate->image_id = $image->id;
        $plate->save();

        foreach ($request->id_ingredientes as $key => $value) {
            
            $receta = new Plates_has_ingredient();

            $receta->plato_id = $plate->id;
            $receta->ingrediente_id = $request->id_ingredientes[$key];
            $receta->cantidad_ingrediente = $request->cantidades_i[$key];

            $receta->save();            
        }

        if ($request->id_licores) {
            
            foreach ($request->id_licores as $key => $value) {
            
                $receta = new Plates_has_liqueur();

                $receta->plato_id = $plate->id;
                $receta->licor_id = $request->id_licores[$key];
                $receta->cantidad_licor = $request->cantidades_l[$key];

                $receta->save();            
            }
        }

    Flash::success('<strong>Exito </strong> el plato '. $plate->plato .' se creo correctamente.');

        return redirect('admin/platos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
