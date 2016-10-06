<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Days_planning;
use App\Planning;
use Laracasts\Flash\Flash;
use App\Http\Requests;

class Planning_DaysController extends Controller
{
    public function index()
    {
        $dias = Days_Planning::all();   
        return view('admin.dias.index', compact('dias'));
    }

    public function edit($id)
    {
        $dia = Days_planning::find($id);

        return view('admin.dias.edit', compact('dia'));
    }

    public function create()
    {
        # code...
    }

    public function update(Request $request, $id)
    {

        $dia = Days_planning::find($id);
        $dia->fill($request->all())->save();

        Flash::success('<strong> Éxito </strong> se ha actualizado la fecha <em>'.$dia->dia.'</em> correctamente.');

        return redirect()->back();
    }

    public function store(Request $request)
    {
	
       
    	$i=0;

    	foreach ($request->dia as $dia) 
    	{

    		$planificacion = Planning::find($request->id);
    		$planificacion->dias()->saveMany([new Days_planning(['dia' => $dia, 'estatus' => $request->estatus[$i]])]);

    	$i++;

		}
			$planificacion = Planning::find($request->id);
			$planificacion->estatus = 'Realizada';
			$planificacion->save();

			Flash::success('<strong> Éxito </strong> se han creado nuevos registro de días para las planificaciones.');

			return redirect('admin/planificaciones');
    }

}
