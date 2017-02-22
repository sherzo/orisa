<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Planning;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use App\Http\Requests\PlanningRequest;

class PlanningsController extends Controller
{
	public function index()
	{
		$planificaciones = Planning::all();	

		return view('admin.planificaciones.index', compact('planificaciones'));
	}

	public function create()
	{
		return view('admin.planificaciones.create');  
	}

	public function store(Request $request)
	{
		
		$start = explode('-', $request->fecha_inicio);
		$end = explode('-', $request->fecha_final);

		if($request->fecha_inicio == $request->fecha_final)
		{

			Flash::warning('<strong> Disculpe </strong> las fechas de las planificaciones no pueden ser iguales.');

			return redirect('admin/planificaciones/create');

		}else{

			$searchStart = Planning::whereDate('fecha_inicio', '>=', $request->fecha_inicio)->exists();
			$searchEnd = Planning::WhereDate('fecha_final', '>=', $request->fecha_inicio)->exists();

			if($searchStart OR $searchEnd) {

				Flash::warning('<strong> Disculpe </strong> estas fechas para la planificación ya han sido tomadas.');

				return redirect()->back();

			} else {

				$planificaciones = Planning::create($request->all());
				$planificaciones->estatus = 'Creada';
				$planificaciones->save();
				
				Flash::success('<strong> Éxito </strong> se ha creado un nuevo registro de planificaciones.');

				return redirect('admin/planificaciones');

			}

		}
		
	}

	public function administrar($id)
	{

		$planificacion = Planning::find($id);

			if ($planificacion->estatus == 'Creada') 
			{
				return view('admin.dias.create', compact('planificacion'));

			} else {

				Flash::warning('<strong> Error </strong> los días de esta planificación ya fueron creados, debe tomar una planificación con un estatus diferente.');

				return redirect()->back();

			}
			
	}

	public function destroy($id)
	{

		$planning = Planning::find($id);

		if ($planning->estatus == 'Procesada') 
		{
			Flash::warning('<strong> Error </strong> la planificación tiene un estatus '.$planning->estatus.' no se puede eliminar.');

			return redirect()->back();
			
		}else {

        	$planning->delete();

        	Flash::success('<strong> Exito </strong> la planificación '. $planning->full_dates .' se eliminó correctamente');

        	return redirect('admin/planificaciones');
    	}
	}
}
