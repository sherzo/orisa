<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Ingredients_type;
use App\Sauce;
use App\Sauces_has_ingredients;
use Illuminate\Http\Request;

class SaucesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sauces = Sauce::paginate(5);

        return view('admin.sauces.index', compact('sauces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients_types = Ingredients_type::lists('tipo_ingrediente', 'id');

        return view('admin.sauces.create', compact('ingredients_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sauce = new Sauce($request->all());
        $sauce->save();

        foreach ($request->id_ingredientes as $key => $value) {

            $receta = new Sauces_has_ingredients();

            $receta->sauce_id = $sauce->id;
            $receta->ingredient_id = $request->id_ingredientes[$key];
            $receta->cantidad_ingrediente = $request->cantidades_i[$key];
            $receta->unidad_id = $request->unidades_i[$key];
            $receta->save();
        }

        Flash::success('<strong>Exito! </strong> la salsa: '. $sauce->salsa .' se creo correctamente.');

        return redirect('admin/sauces');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $sauce = Sauce::find($id);

      $ingredientes = $sauce->ingredientes()->get();
      $unidades_ingredientes = $sauce->UnidadesIngredientes()->get();

     return view('admin.sauces.show', compact('sauce', 'ingredientes', 'unidades_ingredientes'));
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
