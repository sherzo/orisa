<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data_employee;
use App\Employee;
use App\Position;
use App\Http\Requests;
use App\Http\Requests\EmployeeRequest;
use Laracasts\Flash\Flash;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees= Employee::paginate();

        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // Cargos
        $positions = Position::lists('name_position', 'id');

        return view('admin.employees.create', compact('positions'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        //dd($request->all());
        $employee = Employee::create($request->all());
        $data = new Data_employee;

        $data->id_employee = $employee->id;
        $data->code_em = $request->code_em;
        $data->date_of_admission = $request->date_of_admission;
        $data->account_em = $request->account_em;
        $data->contract = $request->contract;
        $data->cestaticket = $request->cestaticket;
        $data->duration_em = $request->duration_em;
        $data->save();

        Flash::success('<strong>Exito!</strong> Registro de '.$employee->names_em.' se realizó correctamente!');

        return redirect('admin/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $data_employee = $employee->Data_employee;
        return view('admin.employees.edit', compact('employee', 'data_employee'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->fill($request->all());
        $employee->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}