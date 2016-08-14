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
        $providers = Provider::paginate(5);


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

        Flash::success('<strong>Exito! </strong> '. $provider->razon_social. ' se modifico correctamente');


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

//---------------- METODO CREADO PARA VERIFICAR QUE NO EXISTE EL PROVEEDOR

    public function search(Request $request)
    {
        if(isset($request->literal)){

            $valor = $request->literal.'-'.$request->rif;
        
        $provider = Provider::rif($valor)->first();

        if($provider)
        {
            Flash::warning('<strong>Alerta </strong> Proveedor de rif: <strong>'. $provider->rif. '</strong> ya esta registrado');
        return redirect()->back();
        }else
        {   

        Flash::info('<strong>Perfecto </strong> proceseda a registrar el proveedor');

          return view('admin.providers.search', compact('valor'));
        }
    
    }

    }

}