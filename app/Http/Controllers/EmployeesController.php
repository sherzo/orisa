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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empleados = Employee::all();
        return view('admin.empleados.index', compact('empleados'));
    }

    public function search(Request $request)
    {
        return view('admin.empleados.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SearchRequest $request)
    {
        $dni_cedula = $request->nationality.'-'.$request->cedula;
        $exists = Employee::where('dni_cedula', $dni_cedula)->exists()?1:0;

        if ($exists) 
        {
            Flash::warning('<strong> Alerta </strong> busqueda con número de cédula <strong>'. $dni_cedula .'</strong> se encuentra en la base de datos.');
            return redirect()->back();
        }
        else
        {
            Flash::info('<strong> INFO </strong> búsqueda con número de cédula '. $dni_cedula .' no se encuentra en la base de datos, proceda a llenar los campos.');

            $cargos = Position::lists('nombre', 'id');
            $turnos = Turn::lists('turno', 'id');

            return view('admin/empleados/create', compact('dni_cedula','cargos', 'turnos'));
        }
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $empleado = Employee::create($request->all());
        $empleado->info()->create($request->all());

        Flash::success('<strong> Éxito </strong> se ha registrado el empleado '.$empleado->nombres.' correctamente.');

        return redirect('admin/empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        #
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Employee::findOrfail($id);
        $cargos = Position::lists('nombre', 'id');
        $turnos = Turn::lists('turno', 'id');
        $dni_cedula = $empleado->dni_cedula;

        return view('admin.empleados.edit', compact('empleado', 'turnos', 'cargos', 'dni_cedula'));

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
        $empleado= Employee::find($id);
        $empleado->fill($request->all())->save(); 

        $info = $empleado->info;
        $info->fill($request->all())->save();

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
}