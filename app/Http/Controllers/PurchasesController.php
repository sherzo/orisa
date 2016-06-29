<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use App\Ingredient;

use App\Http\Requests;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $providers = Provider::lists('razon_social', 'id');

    
        $request->proveedor ? $ingredients = Provider::find($request->proveedor)->Ingredientes()->get() : $ingredients = false;

        if(isset($request->add_ingrediets)){
        
        foreach ($request->add_ingrediets as $key => $value) {
            $data_ingredient[$key] = Ingredient::find($value); 
        }
        
        return view('admin.purchases.index', compact('providers', 'ingredients', 'data_ingredient'));

        
        }else {
            $data_ingredient = false;
        }

        return view('admin.purchases.index', compact('providers', 'ingredients', 'data_ingredient'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
