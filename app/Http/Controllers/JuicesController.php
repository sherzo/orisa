<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Image;
use App\Ingredients_type;
use App\Juice;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class JuicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juices = Juice::all();
        $juices->each(function($juices){
            $juices->image;
        });
        return view('admin.jugos.index')
            ->with('juices', $juices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients_types = Ingredients_type::lists('tipo_ingrediente', 'id');

        return view('admin.jugos.create', compact('ingredients_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //--  Manipulando la imagen

        if($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'orisa_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/juices/';
            $file->move($path, $name);

            $image = new Image();
            $image->imagen = $name;
            $image->save();
        }

        //--  Guardando datos del plato
        $jugo = new Juice($request->all());
        $jugo->image_id = $image->id;
        $jugo->save();

        foreach ($request->id_ingredientes as $key => $ingredient) {

            $jugo->ingredientes()->attach([$ingredient => ['cantidad_ingrediente' => $request->cantidades_i[$key], 'unit_id' => $request->unidades_i[$key]]]);


        }

        bitacora('Registro el jugo',$jugo->jugo, $jugo->id);

        Flash::success('<strong>Exito </strong> el jugo '. $jugo->jugo .' se creo correctamente.');

        return redirect('admin/jugos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $juice = Juice::find($id);

      $ingredientes = $juice->ingredientes()->get();
      $unidades_ingredientes = $juice->UnidadesIngredientes()->get();

     return view('admin.jugos.show', compact('juice', 'ingredientes', 'unidades_ingredientes'));
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
      $juice = Juice::findOrFail($id);

      $ingredientes = $juice->Ingredientes()->get();
      $juice->Ingredientes()->detach();

      foreach($ingredientes as $key => $ingrediente)
      {
        $juice->Ingredientes()->attach([$ingrediente->id => ['cantidad_ingrediente' => $request->cantidad_i[$key], 'unit_id' => $request->units[$key]]]);
      }

      bitacora('Edito el jugo',$jugo->jugo, $jugo->id);

      Flash::success('<strong>Exito </strong> el jugo '. $juice->jugo .' se modifico correctamente.');

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
