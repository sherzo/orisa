<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Assistance;
use App\Day_attendance;
use App\Days_planning;
use App\Employee;
use Laracasts\Flash\Flash;

class AssistsController extends Controller
{
    
    public function index()
    {
        $asistencias = Assistance::all();

    	return view('admin.asistencias.index', compact('asistencias'));
    }

    public function search()
    {
    	return view('admin.asistencias.search');
    }

    public function create(Request $request)
    {
        $day = Days_planning::where('dia', '=', $request->fecha)->exists();

        if ($day) 
        {
            $exists = Day_attendance::where('fecha', $request->fecha)->first();

            $fecha = $request->fecha;
            $empleados = Employee::orderBy('nombres')->get();

            return view('admin.asistencias.create', compact('fecha', 'empleados'));


        }else{

            Flash::warning('<strong> Alerta </strong> no existen resultados coincidentes <strong>'. $request->fecha .'</strong> proceda a crear una planificación.');

            return view('admin.planificaciones.create');
        }
    }

    public function store(Request $request)
    {
        $asistencia = Day_attendance::create($request->all());

        foreach ($request->empleados as $key => $empleado) 
        {
           $asistencias = new Assistance;
           $asistencias->empleado_id = $empleado;
           $asistencias->asistencia_id = $asistencia->id;
           $asistencias->hora_entrada = $request->hora_entrada[$key];
           $asistencias->hora_salida = $request->hora_salida[$key];
           $asistencias->save();
        }

        Flash::success('<strong> Éxito </strong> se han creado nuevas asistencias para la fecha <strong>'. $request->fecha .'</strong>.');

        return redirect('admin/asistencias');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $asistencia = Assistance::find($id);

    	return view('admin.asistencias.edit', compact('asistencia')); 
    }

    public function update(Request $request, $id)
    {

    	$asistencia= Assistance::find($id);
        $asistencia->fill($request->all())->save(); 

        Flash::success('<strong> Éxito </strong> se ha modificado la fecha '. $asistencia->attendays->fecha .' correctamente.');

        return redirect()->back();
    }

    public function destroy($id)
    {
    	//
    }
}
