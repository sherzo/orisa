<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Employee;
use App\Shift;
use Carbon\Carbon;
use Laracasts\Flash\Flash;

class PlanningsController extends Controller
{
		public function index()
		{
			$employees = Employee::paginate(10);		
			return view('admin.planning.index', compact('employees'));
		}

		public function create()
		{
			$employees = Employee::all();
			$shifts = Shift::lists('turno', 'id');
			return view('admin.planning.create', compact('employees', 'shifts'));  
		}

		public function store(Request $request)
		{
			$i = 0;

				foreach ($request->shifts_id as $b) 
				{
					$shifts = Shift::find($b);
					$shifts->employee()->attach($request->employee_id[$i], ['fecha_inicio' => $request->fecha_inicio, 'fecha_culminacion' => $request->fecha_culminacion]);
					$i++;
				}

			return redirect('admin/planificaciones');
		}
}
