<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Employee;
use Carbon\Carbon;

class AttendancesController extends Controller
{
	public function __construct()
	{
		Carbon::setLocale('en');
	}

    public function index(Request $request)
    {
        return view('admin.attendances.index');
    }

    public function create()
    {
    	$date = Carbon::now('America/Caracas');

    	$employees = Employee::orderBy('nombres_em', 'ASC')->lists('nombres_em', 'id');
    	return view('admin.attendances.create', compact('employees', 'date'));
    }
}
