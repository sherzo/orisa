<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Assignment;
use App\Employee;
use Laracasts\Flash\Flash;

class TemporaryAssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $año = $request->year;
        $mes = $request->mes;
        $quincena = $request->quincena;


        if (!empty($request->empleado_id))
        {
            foreach ($request->empleado_id as $key => $employees)
            {
                $employee = Employee::find($key);

                foreach ($employees as $assignments)
                {
                    $employee->assignmentsTemporary()->attach($assignments, ['estatus' => '0']);
                }

            }

            Flash::success('<strong> Éxito </strong> se han creado nuevas asignaciones para los empleados correctamente.');

            return redirect()->action('PayrollController@create', compact('año', 'mes', 'quincena'));

        }else{

            Flash::warning('<strong> Error </strong> debe seleccionar alguna opción.');

            return redirect()->back();
        }
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
        //
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
        //
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
