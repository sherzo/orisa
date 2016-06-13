<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use App\Unit;
use App\Ingredients_type;
use App\Ingredient;
use App\Ingredients_provider;
use App\Http\Requests;
use App\Http\Requests\IngredientRequest;
use Laracasts\Flash\Flash;


class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::paginate();

        return view('admin.ingredients.index', compact('ingredients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Proveedores
        $providers = Provider::lists('razon_social', 'id');

        //Unidades de medida
        $units = Unit::lists( 'unidad', 'id');

        //Tipos de ingredientes
        $ingredients_types = Ingredients_type::lists( 'tipo_ingrediente', 'id');


        // Compacto todas la variables a la vista del registro
        return view('admin.ingredients.create', compact('units', 'providers', 'ingredients_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngredientRequest $request)
    {
        
        $ingredient = Ingredient::create($request->all());

        foreach($request->id_providers as $id_provider) 
        {
            $ingredients_provider = new Ingredients_provider;

            $ingredients_provider->id_ingredient = $ingredient->id;
            $ingredients_provider->id_provider = $id_provider;
            $ingredients_provider->save();
        }   

        Flash::success('<strong>Exito!</strong> Se registro el ingrediente '.
         $ingredient->ingredient_name .' correctamente!');

        return redirect('admin/ingredientes');
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
        $ingredient = Ingredient::findOrFail($id);
        
         //Tipos de ingredientes
        $ingredients_types = Ingredients_type::lists( 'tipo_ingrediente', 'id');

        //Unidades de medida
        $units = Unit::lists( 'unidad', 'id');

          return view('admin.ingredients.edit', compact('ingredient', 'ingredients_types', 'providers', 'units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IngredientRequest $request, $id)
    {
        $ingredient = Ingredient::findOrFail($id);
       
        $ingredient->fill($request->all());
        $ingredient->save();

        Flash::success('<strong>Existo! </strong> '. $ingredient->nombre_ingrediente. ' se modifico correctamente');


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $ingredient = Ingredient::find($id);
        $ingredient->delete();

        Flash::success('<strong>Exito! </strong> el ingrediente '. $ingredient->nombre_ingrediente .' se eliminó correctamente');

        return redirect('admin/ingredientes');
    }
}
