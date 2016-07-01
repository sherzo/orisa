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
use Laracasts\Flash\Flash;



class LiqueursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $liqueurs = Liqueur::paginate();
        $liqueurs->each(function($liqueurs){
            $liqueurs->tipo;
        });


        return view('admin.liqueurs.index', compact('liqueurs'));
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

        //Tipos de licores
        $liqueurs_types = Liqueurs_type::lists('tipo_licor', 'id');

        //Unidades de medida
        $units = Unit::lists( 'unidad', 'id');

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

       foreach($request->id_providers as $id_provider) 
        {
            $liqueurs_provider = new Liqueurs_provider;

            $liqueurs_provider->id_liqueur = $liqueur->id;
            $liqueurs_provider->id_provider = $id_provider;
            $liqueurs_provider->save();
        }   

        Flash::success('<strong>Exito!</strong> Se registro '.
         $liqueur->nombre_licor .' correctamente!');

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
        $liqueur = Liqueur::findOrFail($id);

        //Tipos de licores
        $liqueurs_types = Liqueurs_type::lists('tipo_licor', 'id');


        //Unidades de medida
        $units = Unit::lists( 'unidad', 'id');


        return view('admin.liqueurs.edit', compact('liqueur', 'providers', 'liqueurs_types', 'units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LiqueurRequest $request, $id)
    {
        $liqueur = Liqueur::findOrFail($id);
       
        $liqueur->fill($request->all());
        $liqueur->save();

        Flash::success('<strong>Existo. El licor </strong> '. $liqueur->liqueur_name. ' se modifico correctamente');

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
        $liqueur = Liqueur::find($id);
        $liqueur->delete();

        Flash::success('Exito el ingrediente '. $liqueur->liqueur_name .' se eliminó correctamente');

        return redirect('admin/licores');
    }
}
