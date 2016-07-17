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
    public function index(Request $request)
    {
        $employees = Employee::name($request->get('name'))->orderBy('nombres_em', 'ASC')->paginate(5);
        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Relationships
        $employee = Employee::create($request->all());
        $positions = Position::find($request->id_position);
        $employee->data()->create($request->all());
        $positions->employee()->attach($positions);

        Flash::success('<strong> Exito </strong> Registro de '.$employee->names_em.' se realizó correctamente.');

        return redirect('admin/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.employees.search');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $data = $employee->data()->where('employee_id', $id)->get();
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
        $employee->fill($request->all())->save();
        
        $data = Data_employee::find($request->employee_id);
        $data->fill($request->all())->save();

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
        $employee = Employee::find($id);
        $employee->delete();

        Flash::success('<strong> Exito </strong> el empleado '. $employee->names_em .' se eliminó correctamente');

        return redirect('admin/employees');
    }

    public function search(Request $request)
    {
        $all = $request->nationality.'-'.$request->document_em;
        $exists = Employee::where('dni', $all)->exists()?1:0;

        if ($exists == true) {
            Flash::warning('<strong> Alerta </strong> busqueda con número de cédula <strong>'. $all .'</strong> se encuentra en la base de datos.');
            return redirect()->back();
        }
        else
        {
            Flash::info('<strong> Alerta </strong> busqueda con número de cédula '. $all .' no se encuentra en la base de datos, proceda a registrar.');

            $positions = Position::lists('nombre', 'id');

            return view('admin.employees.create', compact('all','positions'));
        }
    }
}