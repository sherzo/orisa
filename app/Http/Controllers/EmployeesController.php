<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data_employee;
use App\Employee;
use App\Position;
use App\Turn;
use App\Http\Requests;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\SearchRequest;
use Laracasts\Flash\Flash;


class EmployeesController extends Controller
{

    public function index(Request $request)
    {
        $empleados = Employee::all();
        return view('admin.empleados.index', compact('empleados'));
    }

    public function search(Request $request)
    {
        return view('admin.empleados.search');
    }

    public function create(SearchRequest $request)
    {
        $dni_cedula = $request->nationality.'-'.$request->cedula;
        $exists = Employee::where('dni_cedula', $dni_cedula)->exists();

        if ($exists)
        {
            Flash::warning('<strong> Alerta </strong> busqueda con número de cédula <strong>'. $dni_cedula .'</strong> se encuentra en la base de datos.');

            return redirect()->back();

        }else{

            Flash::info('<strong> INFO </strong> búsqueda con número de cédula '. $dni_cedula .' no se encuentra en la base de datos, proceda a llenar los campos.');

            $cargos = Position::lists('nombre', 'id');
            $turnos = Turn::lists('turno', 'id');
            $empleado = false;
            return view('admin/empleados/create', compact('dni_cedula','cargos', 'turnos','empleado'));
        }
    }

    public function store(EmployeeRequest $request)
    {
        $empleado = Employee::create($request->all());
        $empleado->info()->create($request->all());

        bitacora('Registro el empleado',$empleado->nombres, $empleyado->id);
        Flash::success('<strong> Éxito </strong> se ha registrado el empleado '.$empleado->nombres.' correctamente.');

        return redirect('admin/empleados');
    }

    public function show($id)
    {
        $employee = Employee::find($id);

        return view('admin.empleados.show', compact('employee'));
    }

    public function edit($id)
    {
        $empleado = Employee::findOrfail($id);
        $cargos = Position::lists('nombre', 'id');
        $turnos = Turn::lists('turno', 'id');
        $dni_cedula = false;

        return view('admin.empleados.edit', compact('empleado', 'turnos', 'cargos', 'dni_cedula'));

    }

    public function update(Request $request, $id)
    {
        $empleado= Employee::find($id);
        $empleado->fill($request->all())->save();

        $info = $empleado->info;
        $info->fill($request->all())->save();

        bitacora('Registro el empleado',$empleado->nombres, $empleyado->id);
        Flash::success('<strong> Éxito </strong> se ha actualizado el empleado <em>'.$empleado->full_name.'</em> correctamente.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        Flash::success('<strong> Exito </strong> el empleado '. $employee->names_em .' se eliminó correctamente');

        return redirect('admin/employees');
    }
}
