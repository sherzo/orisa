<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Position;
use Laracasts\Flash\Flash;
use App\Http\Requests\PositionsRequest;

class PositionsController extends Controller
{
    public function index(Request $request)
    {
        $positions = Position::name($request->get('name'))->orderBy('nombre_cgo', 'ASC')->paginate();

        return view('admin.positions.index', compact('positions'));
    }

    public function create()
    {
    	return view('admin.positions.create');
    }

    public function store(PositionsRequest $request)
    {
    	$positions = Position::create($request->all());
    	$positions->save();

    	Flash::success('<strong> Exito </strong> Registro de '.$positions->name_position.' se realizó correctamente.');

        return redirect('admin/cargos');
    }

    public function edit($id)
    {
        $positions = Position::find($id);
        return view('admin.positions.edit', compact('positions'));
    }

    public function update(EditPositionsRequest $request,$id)
    {   
        $positions = Position::find($id);
        $positions->fill($request->all());
        $positions->save();

        Flash::success('<strong> Exito </strong> se han modificado los datos correctamente.');

        return redirect('admin/cargos');
    }

    public function show()
    {
        //
    }
    public function destroy($id)
    {
        $positions = Position::find($id);
        $positions->delete();

        Flash::success('<strong> Exito </strong> el cargo '. $positions->name_position.' se eliminó correctamente.');

        return redirect('admin/cargos');
    }

}
