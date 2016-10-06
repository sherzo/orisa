<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Client;
use Laracasts\Flash\Flash;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $dni_cedula = $request->literal.$request->cedula;

        $exist = Client::where('dni_cedula', $dni_cedula)->exists();

        if($exist) 
        {
            Flash::warning('<strong> Alerta </strong> busqueda con número de cédula <strong>'. $dni_cedula .'</strong> se encuentra en la base de datos.');
            
            return redirect()->back(); 

        }else{

            Flash::info('<strong> INFO </strong> búsqueda con número de cédula '. $dni_cedula .' no se encuentra en la base de datos, proceda a llenar los campos.');

            return view('admin.clients.create', compact('dni_cedula'));

        }
        
    }

    public function search(Request $request)
    {
        return view('admin.clients.search');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client($request->all());

        $client->save();

        Flash::success('<strong>Exito! </strong> Se ha registrado el cliente '. $client->nombre. ' correctamente');

        return redirect('admin/clientes');

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
        $client = Client::findOrFail($id);
        $dni_cedula = false;
        return view('admin.clients.edit', compact('client', 'dni_cedula'));
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
        $client = Client::findOrFail($id);
       
        $client->fill($request->all());
        $client->save();

        Flash::success('<strong>Exito! </strong> '. $client->nombre. ' se modifico correctamente');


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
        //
    }

}
