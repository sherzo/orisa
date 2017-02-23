<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

use App\Http\Requests;

use App\Additional;

class AdditionalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adicionales = Additional::all();
        $indice = 0;

        return view('admin.additionals.index', compact('adicionales', 'indice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.additionals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adicional = Additional::create($request->all())->save();
        
        if($request->tipo == 'A')
        {
            Flash::success('<strong> Éxito </strong> se ha creado una nueva asignación correctamente.');

            return redirect('admin/adicionales');

        } else {

            Flash::success('<strong> Éxito </strong> se ha creado una nueva deducción correctamente.');

            return redirect('admin/adicionales');
        }
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
        $adicionales = Additional::find($id);

        return view('admin.additionals.edit', compact('adicionales'));
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
        $adicionales = Additional::find($id);

        $newAdicionales = $adicionales->fill($request->all());
        $newAdicionales->save();

        Flash::success('<strong> Éxito </strong> se ha editado el adicional '.$newAdicionales->nombre.' correctamente.');

        return redirect('admin/adicionales');

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
