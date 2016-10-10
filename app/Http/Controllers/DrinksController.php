<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Provider;
use App\Drink;
use App\Unit;
use App\Http\Requests\DrinkRequest;
use Laracasts\Flash\Flash;

class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::all();

        return view('admin.drinks.index', compact('drinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::lists('razon_social', 'id');
        $units = Unit::lists( 'unidad', 'id');

        return view('admin.drinks.create', compact('providers', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrinkRequest $request)
    {

        $drink = Drink::create($request->all());
        $drink->save();

        foreach($request->id_providers as $provider) 
        {
            $drink->providers()->attach($provider);
        }   

        Flash::success('<strong> Perfecto </strong> se ha registrado una nueva bebida <em>'.$drink->bebida.'</em> correctamente.');

        return redirect('admin/bebidas');
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
        $drink = Drink::findOrFail($id);
        $units = Unit::lists( 'unidad', 'id');

        $providers = false;

        return view('admin.drinks.edit', compact('drink','units', 'providers'));
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

        $drink = Drink::find($id);
        $drink->fill($request->all())->save();

        Flash::success('<strong> Perfecto </strong> se ha actualizado la bebida <em>'.$drink->bebida.'</em> correctamente.');

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
        $drinks = Drink::find($id);
        $drinks->delete();

        Flash::success('<strong>Exito </strong> la bebida <em>'. $drinks->bebida .'</em> se eliminó correctamente.');

        return redirect('admin/ingredientes');
    }
}
