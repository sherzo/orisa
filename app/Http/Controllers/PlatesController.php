<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use App\Ingredients_type;
use App\Liqueurs_type;
use App\Unit;
use Laracasts\Flash\Flash;

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
        return view('admin.plates.index');
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

        // $name_ingredient = $request->get('ingrediente_nombre');
        
        // if (isset($name_ingredient))
        // {
        //     // Si existe busca en BD
        //     $ingredient = Ingredient::agregar($name_ingredient)->first();
            
        //     if($ingredient)
        //     {
        //         // Si encuentra: *Retorna a la vista el ingrediente y las unidades        
        //         $units = Unit::lists( 'unidad', 'id');

        //         return view('admin.plates.create', compact('ingredient', 'units')); 
 
        //     }else 
        //         {
        //             // Destruyo la variable
        //             unset($ingredient);

        //             // Mensaje de no encontrado
        //             Flash::warning('<strong>Alerta</strong> ingrediente '. $name_ingredient .' no encontrado');
        //             return view('admin.plates.create', compact('ingredient'));    
        //         }

        // }else 
        //     {
        //         // Si no entra como una busqueda, retorna la vista
        //         return view('admin.plates.create');    
        //     }
        
        
    }


    public function addIngredient(Request $request) {

       if(isset($request->id_ingrediente)){
        
        /*$_SESSION['ingredientes'][$request->id_ingrediente] = array('id' => $request->id_ingrediente,
                            'ingrediente' => 'arroz',
                            'cantidad' => $request->cantidad,
                             'unidad' => $request->unidad
                             );
*/

        $json = array('id' => $request->id_ingrediente, 
                     'cantidad' => $request->cantidad,
                     'unidad' => $request->unidad,
                     'success' => true);

        echo json_encode($json);
        
       }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
