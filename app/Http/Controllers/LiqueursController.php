<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Liqueur;
use App\Provider;
use App\Liqueurs_provider;
use App\Unit;
use App\Liqueurs_type;
use App\Http\Requests;
use App\Http\Requests\LiqueurRequest;


class LiqueursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.liqueurs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //Proveedores
        $providers = Provider::lists('business_name', 'id');

        //Tipos de licores
        $liqueurs_types = Liqueurs_type::lists('type_name', 'id');

        //Unidades de medida
        $units = Unit::lists( 'units_name', 'id');

        // Compacto todas la variables a la vista del registro
        return view('admin.liqueurs.create', compact('units', 'liqueurs_types', 'providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LiqueurRequest $request)
    {
  
    $liqueur = Liqueur::create($request->all());
    $licor = $liqueur->id;

       foreach($request->id_providers as $id_provider) 
        {
            $liqueurs_provider = new Liqueurs_provider;

            $liqueurs_provider->id_liqueur = $licor;
            $liqueurs_provider->id_provider = $id_provider;
            $liqueurs_provider->save();
        }   

        return redirect('admin/licores');
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
