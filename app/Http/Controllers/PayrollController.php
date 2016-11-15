<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;
use App\Planning;
use App\Holiday;
use App\Payroll;
use App\Assistance;
use App\Days_planning;
use App\Day_attendance;
use Laracasts\Flash\Flash;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.payroll.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function select()    
    {
        return view('admin.payroll.select');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fecha = $request->año.'-'.$request->mes;
        
        $employees = Employee::get();

        $payroll = Payroll::where([
            ['year', $request->año],
            ['mes', $request->mes],
            ['quincena', $request->quincena]
            ])->exists();

        if($payroll)
        {
            Flash::warning('<strong> Error </strong> la prenómina de esta quincena correspondientes al mes de <em>'.$request->mes.'</em> ya fueron creados, debe tomar una quincena diferente.');

            return redirect()->back();

        }else{

            //$variable = Days_planning::all();

            if($request->quincena == 1)
            {

                $i = $fecha.'-01'; 
                $f = $fecha.'-15';

                $dates = Days_planning::whereBetween('dia', [$i,$f])->get();
                $assistances = Day_attendance::whereBetween('fecha', [$i,$f])->get();

            }else{

                if($request->quincena == 2 AND $request->mes == 1 OR 
                                               $request->mes == 3 OR 
                                               $request->mes == 5 OR 
                                               $request->mes == 7 OR 
                                               $request->mes == 8 OR $request->mes == 10 OR $request->mes == 12)
                {
                    $i = $fecha.'-16'; 
                    $f = $fecha.'-31';

                    $dates = Days_planning::whereBetween('dia', [$i,$f])->get();
                    $assistances = Day_attendance::whereBetween('fecha', [$i,$f])->get();

                }else{

                    if ($request->quincena == 2 AND $request->mes == 2) 
                    {
                        $i = $fecha.'-16'; 
                        $f = $fecha.'-29';

                        $dates = Days_planning::whereBetween('dia', [$i,$f])->get();
                        $assistances = Day_attendance::whereBetween('fecha', [$i,$f])->get();

                    }else{

                        $i = $fecha.'-16'; 
                        $f = $fecha.'-30';

                        $dates = Days_planning::whereBetween('dia', [$i,$f])->get();
                        $assistances = Day_attendance::whereBetween('fecha', [$i,$f])->get();
                    }
                }
            }

            $count = count($dates);

            /*
            *       Dias que labora el empleado en una planificación de la quincena $count
            */

            foreach ($employees as $employee) 
            {
                foreach ($assistances as $key => $assistance) 
                {
                    $worked[$employee->id][] = Assistance::where([['empleado_id', $employee->id],['asistencia_id', $assistance->id]])->count();
                }
            }

            /*
            *       Contando cuantos dias laboro en la quincena 
            */

            foreach ($worked as $worked) 
            {
                $l = 0;
                
                foreach ($worked as $worked_days) 
                {
                    $l += $worked_days;
                }

                $laborados[] = $l;

            }

            //dd($laborados);

            /*
            *     Calculando Horas extras de los empleados
            */
        }

        return view('admin.payroll.create', compact('employees', 'fechas', 'i', 'f', 'laborados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
