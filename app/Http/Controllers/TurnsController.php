<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planning;
use App\Employee;
use App\Holiday;
use App\Days_planning;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use Datetime;

class TurnsController extends Controller
{
    public function index()
    {
        $planificaciones = Holiday::all();
        $plannings = Planning::all();
        $indice = 0;

        foreach ($plannings as $key => $planning) 
        {
            $planning_em[] = $planning->pldays()->groupBy('empleado_id')->get();

        }

        //dd($planning_em);
        
        return view('admin.turnos.index', compact('planning_em', 'planificaciones', 'indice'));
    }

    public function select()
    {
        $planificaciones = Planning::where('estatus', '=', 'Realizada')->get();

        return view('admin.turnos.select', compact('planificaciones'));

    }

    public function create(Request $request)
    {   

        $planificacion = Planning::find($request->id);
        $empleados = Employee::all();

        $start = new Datetime($planificacion->fecha_inicio);
        $end = new Datetime($planificacion->fecha_final);

        $diff = $start->diff($end);
        $dias = $diff->days;

        for($i = $planificacion->fecha_inicio; $i <= $planificacion->fecha_final; $i = date('Y-m-d', strtotime($i ."+ 1 days"))) {

            $fechas[] = $i;
        }
        
        return view('admin.turnos.create', compact('planificacion','empleados', 'dias', 'fechas'));
    }

    public function store(Request $request)
    {   

        if(isset($request->empleado_id)) 
        {
    
        foreach($request->empleado_id as $key => $dias) 
        { 
            $empleado = Employee::find($key);

            foreach ($dias as $value) 
            {

            $empleado->hoem()->saveMany([new Holiday(['empleado_id' => $empleado, 'dia_id' => $value, 'planificacion_id' => $request->planificacion_id])]);
            
            }
        }

        $planificacion = Planning::find($request->planificacion_id);
        $planificacion->estatus = 'Procesada';
        $planificacion->save();

        Flash::success('<strong> Éxito </strong> se han creado nuevos registros de días para los empleados.');

        return redirect('admin/planificaciones/administrar/dias/turnos');

        }else{

            Flash::warning('<strong> Error </strong> debe marcar las opciónes para guardar la planificación.');
            return redirect()->back();

        }
    }

    public function view()
    {

        $planificaciones = Holiday::groupBy('planificacion_id')->get();
        $indice = 0;

        return view('admin.turnos.show', compact('planificaciones', 'indice'));
    }

    public function edit($id)
    {
        $dias = Planning::find($id)->dias()->get();
        $planificacion = Holiday::where('planificacion_id', $id)->get();
        $empleados = Employee::all();

        return view('admin.turnos.edit', compact('dias', 'planificacion', 'empleados', 'id'));
    }

    public function show($id)
    {
        $planificacion = Planning::find($id);
        $empleados = $planificacion->pldays()->groupBy('empleado_id')->get();

        $start = new Datetime($planificacion->fecha_inicio);
        $end = new Datetime($planificacion->fecha_final);

        $diff = $start->diff($end);
        $dias = $diff->days;

        for($i = $planificacion->fecha_inicio; $i <= $planificacion->fecha_final; $i = date('Y-m-d', strtotime($i ."+ 1 days"))) {

            $fechas[] = $i;
        }

        return view('admin.turnos.plannings.show', compact('planificacion', 'dias', 'fechas', 'empleados'));
    }

    public function update(Request $request)
    {
        $planificaciones = Holiday::where('planificacion_id', $request->planificacion_id)->get();

        foreach ($planificaciones as $key => $planificacion) 
        {

           $planificacion->delete();

        }
        
        if(isset($request->empleado_id)) 
        {
    
        foreach($request->empleado_id as $key => $dias) 
        { 
            $empleado = Employee::find($key);

            foreach ($dias as $value) 
            {

            $empleado->hoem()->saveMany([new Holiday(['empleado_id' => $empleado, 'dia_id' => $value, 'planificacion_id' => $request->planificacion_id])]);
            
            }
        }

        Flash::success('<strong> Éxito </strong> se han editado los registros de días para los empleados.');

        return redirect('admin/planificaciones/administrar/dias/turnos');

        }else{

            Flash::warning('<strong> Error </strong> debe marcar las opciónes para guardar la planificación.');
            return redirect()->back();

        }
    }

    public function destroy(Request $request)
    {
        $planning = Planning::find($request->id);

        $empleado = \DB::table('employees_has_days')->where([['planificacion_id', $request->id], ['empleado_id', $request->idem]])->delete();

        Flash::success('<strong> Éxito </strong> se ha eliminado el empleado de la planificación '.$planning->full_dates.'.');

        return redirect()->back();

    }
}
