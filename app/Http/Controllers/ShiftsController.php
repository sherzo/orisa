<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Shift;
use App\Employee_has_shift;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class ShiftsController extends Controller
{
	public function index()
	{
		$employee_has_shifts = Employee_has_shift::paginate(5);
        #dd($employee_has_shifts);
        
		return view('admin.shifts.index', compact('employee_has_shifts'));
	}

    public function create()
    {
    	return view('admin.shifts.create');
    }

    public function store(Request $request)
    {
        $date = Carbon::now('America/Caracas');

        #dd($fecha_inicio);
        $shifts = Shift::create($request->all());
        $shifts->save();

        Flash::success('<strong> Exito </strong> Registro de turno '.$shifts->name_turno.' se realizó correctamente.');

        return redirect('admin/turnos');
    }

    public function show($id)
    {
    	# code...
    }
}
