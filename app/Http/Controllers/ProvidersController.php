<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Provider;
use Laracasts\Flash\Flash;
use App\Http\Requests\ProviderRequest;
use App\Http\Requests\EditProviderRequest;


class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::paginate();

        return view('admin.providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderRequest $request)
    {
         $provider = new Provider($request->all());

        $provider->rif = $request->literal.'-'.$request->rif;
        $provider->razon_social = $request->razon_social;
        $provider->telefono = $request->codigo.''.$request->telefono;
        $provider->direccion = $request->direccion;
        $provider->correo = $request->correo;
        $provider->save();

        Flash::success('<strong>Exito! </strong> Se ha registrado el proveedor '. $provider->razon_social. ' correctamente');

        return redirect('admin/proveedores');

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
        $provider = Provider::findOrFail($id);

        return view('admin.providers.edit', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProviderRequest $request, $id)
    {
                
        $provider = Provider::findOrFail($id);
       
        $provider->fill($request->all());
        $provider->save();

        Flash::success('<strong>Existo! </strong> '. $provider->razon_social. ' se modifico correctamente');


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
        $provider = Provider::find($id);
        $provider->delete();

        Flash::success('<strong>Exito el proveedor</strong> '. $provider->razon_social .' se eliminó correctamente');

        return redirect('admin/proveedores');
    }

    public function start()
    {
        dd('gola');
    }


//----------------------- METODO CREADO PARA VERIFICAR QUE NO EXISTE EL PROVEEDOR
    public function search(Request $request)
    {
        $valor = $request->literal.'-'.$request->rif;
        $provider = Provider::rif($valor)->first();

        if($provider)
        {
            Flash::warning('<strong>Alerta </strong> Proveedor'. $provider->rif. ' ya esta registrado');


        return redirect()->back();
        }else
        {   
            $providers = Provider::paginate();
            return view('admin.providers.index', compact('providers'));
        }
    }
        
}
