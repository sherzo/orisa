<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
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
        $name_ingredient = $request->get('ingrediente_nombre');
        

        if (isset($name_ingredient))
         {

            $ingredient = Ingredient::agregar($name_ingredient)->first();
            
            if($ingredient)
            {
            return view('admin.plates.create', compact('ingredient')); 
 
            }else {
                    $ingredient = null;
                    Flash::warning('<strong>Alerta</strong> ingrediente no encontrado');
                    return view('admin.plates.create', compact('ingredient'));    
            }

        }else {

        return view('admin.plates.create');    
         
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
