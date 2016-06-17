<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data_employee;
use App\Employee;
use App\Employee_has_position;
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
        $employee = Employee::create($request->all());
        
        $data_employees = new Data_employee();
        $data_employees->id_employee = $employee->id;
        $data_employees->code_em = $request->code_em;
        $data_employees->date_of_admission = $request->date_of_admission;
        $data_employees->contract_status = $request->contract_status;
        $data_employees->cestaticket = $request->cestaticket;
        $data_employees->duration_em = $request->duration_em;
        $data_employees->bank = $request->bank;
        $data_employees->type_account = $request->type_account;
        $data_employees->account_em = $request->account_em;
        $data_employees->save();
        
        $employee_has_positions = new Employee_has_position;
        $employee_has_positions->id_employee = $employee->id;
        $employee_has_positions->id_position = $request->id_position;
        $employee_has_positions->save();

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
        $data = $employee->Data_employee;

        return view('admin.employees.edit', compact('employee', 'data'));

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