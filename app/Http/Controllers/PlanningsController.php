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
		$planificaciones = Planning::paginate(10);	

		return view('admin.planificaciones.index', compact('planificaciones'));
	}

	public function create()
	{
		return view('admin.planificaciones.create');  
	}

	public function store(PlanningRequest $request)
	{

	$datetime1 = date_create($request->fecha_inicio);
	$datetime2 = date_create($request->fecha_final);
	$interval = date_diff($datetime1, $datetime2);
    $result = $interval->format('%a');
    	
    	if ($result > 7) 
    	{
 			
 			Flash::warning('<strong> Error </strong> las fechas deben estan en un rango no mayor a 10 días.');
 			
 			return redirect()->back();

 		} else {

		if($request->fecha_inicio == $request->fecha_final)
		{

			Flash::warning('<strong> Error </strong> las fechas de las planificaciones no pueden ser iguales.');

			return redirect('admin/planificaciones/create');

		}else{

			$fechas = $request->fecha_inicio . ' - ' . $request->fecha_final;
			$planificaciones = Planning::create($request->all());
			$planificaciones->fechas = $fechas;
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
}
