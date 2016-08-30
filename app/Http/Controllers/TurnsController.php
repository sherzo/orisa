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
        $empleados = Holiday::all();

        return view('admin.turnos.index', compact('empleados'));
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

            $empleado->hoem()->saveMany([new Holiday(['empleado_id' => $empleado, 'dia_id' => $value])]);
            
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
}
