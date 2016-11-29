<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planning;
use App\Employee;
use App\Holiday;
use App\Days_planning;
use Laracasts\Flash\Flash;
use App\Http\Requests;

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
        $planificaciones = Planning::where('estatus', '=', 'Realizada');
        $planificacion = $planificaciones->lists('fechas', 'id');

        return view('admin.turnos.select', compact('planificacion'));
    }

    public function create(Request $request)
    {   

        $planificacion = Planning::find($request->id);
        $empleados = Employee::all();

        return view('admin.turnos.create', compact('planificacion','empleados'));
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

    public function view(Request $request)
    {

        $planificaciones = Planning::where('estatus', '=', 'Procesada');
        $planificacion = $planificaciones->lists('fechas', 'id');
        $empleados = Employee::all();

        $request->planificacion ? $planning = Planning::find($request->planificacion)->dias()->get() : $planning = false;
        $request->planificacion ? $holiday = Holiday::where('planificacion_id', $request->planificacion)->get() : $holiday = false; 
        $id = $request->planificacion;

        return view('admin.turnos.show', compact('planificacion', 'planning', 'holiday', 'empleados', 'id'));

    }

    public function edit($id)
    {
        $dias = Planning::find($id)->dias()->get();
        $planificacion = Holiday::where('planificacion_id', $id)->get();
        $empleados = Employee::all();

        return view('admin.turnos.edit', compact('dias', 'planificacion', 'empleados', 'id'));
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
}
