<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planning;
use App\Employee;
use App\Http\Requests;

class TurnsController extends Controller
{
    public function index()
    {
        return view('admin.turnos.index');
    }

    public function create(Request $request)
    {   

        $planificacion = Planning::find($request->id);
        $empleados = Employee::all();

    	return view('admin.turnos.create', compact('planificacion','empleados'));
    }

    public function select()
    {
        $planificaciones = Planning::lists('fechas', 'id');

        return view('admin.turnos.select', compact('planificaciones'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
