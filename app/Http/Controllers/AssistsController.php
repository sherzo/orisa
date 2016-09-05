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

            if ($exists) 
            {


            }else{

                $fecha = $request->fecha;
                $empleados = Employee::orderBy('nombres')->get();

                return view('admin.asistencias.create', compact('fecha', 'empleados'));
            }

        }else{

            Flash::warning('<strong> Alerta </strong> no existen resultados coincidentes <strong>'. $request->fecha .'</strong> proceda a crear una planificación.');

            return view('admin.planificaciones.create');
        }
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
    	// 
    }

    public function update(Request $request, $id)
    {
    	//
    }

    public function destroy($id)
    {
    	//
    }
}
