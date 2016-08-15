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
		if($request->fecha_inicio == $request->fecha_final)
		{

			Flash::warning('<strong> Error </strong> las fechas de las planificaciones no pueden ser iguales.');

			return redirect('admin/planificaciones/create');

		}else{

			$planificaciones = Planning::create($request->all());
			$planificaciones->save();

			Flash::success('<strong> Éxito </strong> se ha creado un nuevo registro de planificaciones.');

			return redirect('admin/planificaciones');
		}
	}

	public function administrar(Request $request)
	{

		if(empty($request->id)){

			Flash::warning('<strong> Error </strong> debe seleccionar una planificación para poder ejecutar una acción.');

			return redirect()->back();
		} else {
		
			$dias = array('0' => 'Domingo', '1' => 'Lunes', '2' => 'Martes', '3' => 'Miercoles', '4' => 'Jueves', '5' => 'Viernes', '6' => 'Sabado');

			$planificaciones = Planning::find($request->id);

			return view('admin.planificaciones.plannings', compact('planificaciones', 'dias'));
		
		}
	}
}
