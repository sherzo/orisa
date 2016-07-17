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
 	 	return view('admin.planning.create', compact('employees', 'shifts'));  
    }

    public function store(Request $request)
    {
    		$employees = Employee::find($request->employee_id);
    		dd($employees);
    }
}
