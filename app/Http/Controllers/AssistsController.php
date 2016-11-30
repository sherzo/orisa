<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Assistance;
use App\Day_attendance;
use App\Days_planning;
use App\Employee;
use App\Holiday;
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
            $dia = Days_planning::where('dia', $request->fecha)->first();
            $empleados = Holiday::where('dia_id', $dia->id)->get();
            $day_exists = Day_attendance::where('fecha', $request->fecha)->first();
            
        }else{

            Flash::warning('<strong> Alerta </strong> no existen resultados coincidentes <strong>'. $request->fecha .'</strong> proceda a crear una planificación.');

            return redirect()->back();
        }

        if (!empty($day_exists)) 
        {
            return view('admin.asistencias.create', compact('day_exists', 'empleados'));

        }else{

            $fecha = $request->fecha;

            return view('admin.asistencias.create', compact('fecha', 'empleados'));

        }
    }

    public function store(Request $request)
    {
        if(isset($request->id_asistencia))
        {
            $fecha = Day_attendance::find($request->id_asistencia);

        }else{

            $asistencia = Day_attendance::create($request->all());

            foreach ($request->empleados as $key => $empleado) 
            {
                $asistencias = new Assistance;
                $asistencias->empleado_id = $empleado;
                $asistencias->asistencia_id = $asistencia->id;
                $asistencias->hora_entrada = $request->hora_entrada[$key];
                $asistencias->hora_salida = $request->hora_salida[$key];
                $asistencias->motivo = 'Asistio';
                $asistencias->save();
            }
        }
        
        if(isset($fecha->exists))
        {

            foreach ($request->empleados as $key => $empleado) 
            {
                $empleado_as = Assistance::where([['empleado_id', $empleado],['asistencia_id', $request->id_asistencia]])->exists();
                
                if ($empleado_as) 
                {

                    Flash::error('<strong> ¡Error! </strong> algunos empleados ya se encuentran asistentes.');

                    return redirect('admin/asistencias');
                    
                }else{

                $asistencias = new Assistance;
                $asistencias->empleado_id = $empleado;
                $asistencias->asistencia_id = $fecha->id;
                $asistencias->hora_entrada = $request->hora_entrada[$key];
                $asistencias->hora_salida = $request->hora_salida[$key];
                $asistencias->motivo = 'Asistio';
                $asistencias->save();

                }
            }

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
    	$asistencia = Assistance::find($id);
        $asistencia->delete();

        Flash::success('<strong> Exito </strong> la asistencia se eliminó correctamente');

        return redirect('admin/asistencias');
    }
}
