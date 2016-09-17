<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Drink;
use App\Ingredient;
use App\Ingredients_type;
use App\Liqueurs_type;
use App\Unit;
use Laracasts\Flash\Flash;
use App\Drinks_has_ingredient;
use App\Drinks_has_liqueur;
use App\Image;
use App\Sauce;

class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::all();
        $drinks->each(function($drinks){
            $drinks->image;
        });

        return view('admin.drinks.index', compact('drinks'));
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

        return view('admin.drinks.create', compact('liqueurs_types', 'ingredients_types'));
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
            $name = 'orisa_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/drinks/';
            $file->move($path, $name);

            $image = new Image();
            $image->imagen = $name;
            $image->save();
        }
    //--  Guardando datos de la bebida
        $drink = new Drink($request->all());
        $drink->image_id = $image->id;
        $drink->save();

        // Guardando los ingredientes
        if ($request->id_ingredientes) {
    
            foreach ($request->id_ingredientes as $key => $value) {
                
                $receta = new Drinks_has_ingredient();

                $receta->bebida_id = $drink->id;
                $receta->ingrediente_id = $request->id_ingredientes[$key];
                $receta->cantidad_ingrediente = $request->cantidades_i[$key];
                $receta->unidad_id = $request->unidades_i[$key];

                $receta->save();   

            }         
        }


        //-- Guardando los licores
        if ($request->id_licores) {
            
            foreach ($request->id_licores as $key => $value) {
            
                $receta = new Drinks_has_liqueur();

                $receta->bebida_id = $drink->id;
                $receta->licor_id = $request->id_licores[$key];
                $receta->cantidad_licor = $request->cantidades_l[$key];
                $receta->unidad_id = $request->unidades_l[$key];

                $receta->save();            
            }
        }

        Flash::success('<strong>Exito </strong> La bebida '. $drink->bebida .' se creo correctamente.');

        return redirect('admin/bebidas');
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