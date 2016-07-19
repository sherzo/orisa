<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Employee;
use App\Shift;

class PlanningsController extends Controller
{
    public function index()
    {
    	return view('admin.planning.index');
    }

    public function create()
    {
    	$employees = Employee::all();
 	 	$shifts = Shift::lists('turno', 'id');
 	 	$selected = array();

 	 	return view('admin.planning.create', compact('employees', 'shifts', 'selected'));  
    }

    public function store(Request $request)
    {
   		foreach ($request->employee_id as $key => $value) {
   			$employees = Employee::find($value);
   			$employees->shift()->sync($request->id);
   			#dd($request->id);
   			#dd($employees->shift->toArray());
   		}
    	
    	
    	#dd($employees);
    }
}
