<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Deduction;
use App\Employee;
use App\ExtraHour;
use App\Planning;
use App\Holiday;
use App\PayrollMade;
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
        $payrollMade = PayrollMade::all();

        return view('admin.payroll.index', compact('payrollMade'));
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

        $quincena = $request->quincena;
        $mes = $request->mes;
        $year = $request->año;

        $employees = Employee::all();
        $deductions = Deduction::all();

        $payroll = Payroll::where([['year', $request->año],['mes', $request->mes],['quincena', $request->quincena]])->exists();

        if($payroll)
        {
            Flash::warning('<strong> Error </strong> la prenómina de esta quincena correspondientes al mes de <em>'.$request->mes.'</em> ya fueron creados, debe tomar una quincena diferente.');

            return redirect()->back();

        }else{


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

            foreach ($employees as $employee) 
            {
                foreach ($assistances as $assistance) 
                {
                    $worked[$employee->id][] = Assistance::where([['empleado_id', $employee->id],['asistencia_id', $assistance->id]])->count();
                    $extraHours[$employee->id][] = Assistance::where([['empleado_id', $employee->id],['asistencia_id', $assistance->id]])->get();
                }
            }

            if (!empty($worked)) 
            {

                foreach ($worked as $worked) 
                {
                    $l = 0;
                    
                    foreach ($worked as $worked_days) 
                    {
                        $l += $worked_days;
                    }

                    $laborados[] = $l+4;

                }

                $t = 0;

                if (!empty($worked)) 
                {
            
                    foreach ($extraHours as $extraHour) 
                    {
                        
                        foreach ($extraHour as $extraHourArray) 
                        {
                        
                            foreach ($extraHourArray as $extraHourArrayCount) 
                            {
                                $dt = Carbon::parse($extraHourArrayCount->hora_entrada);
                                $dt2 = Carbon::parse($extraHourArrayCount->hora_salida);
                                        
                                $time = Carbon::createFromTime($dt->hour, $dt->minute, $dt->second);
                                $time2 = Carbon::createFromTime($dt2->hour, $dt2->minute, $dt2->second);

                                $timeForExtraCoding = $dt->diffInHours($dt2, false);
                                //$minutesForExtraCoding = $dt->diffInMinutes($dt2, false);

                                if($timeForExtraCoding > '8')
                                {
                                    $extraHourEmployee[$t][] = $timeForExtraCoding-8;
         
                                } else {

                                    $extraHourEmployee[$t][] = 0;
                                }
                            }


                        }    

                         $t++;
                    }
                    

                    foreach ($extraHourEmployee as $extraHourEmployee) 
                    {
                        $e = 0;


                        foreach ($extraHourEmployee as $extraHourEmployeeCount) 
                        {
                            $e += $extraHourEmployeeCount;    
                        }

                        $hoursExtras[] = $e;

                    }

                }else{

                Flash::warning('<strong> Error </strong>');

                return redirect()->back();
                
                }

                foreach ($employees as $key => $employee) 
                {
                    $k = 0;

                    foreach ($hoursExtras as $hoursCalculate) 
                    {
                        $horasExtras[] = $employee->turno->extraHours->valor_turno * $hoursCalculate;
                    }
                    
                    $assignmentsTotal[] = $employee->cargo->salario/30 * $laborados[$key] + $horasExtras[$key]; 
                
                
                    $fx = Carbon::parse($i);
                    $fx2 = Carbon::parse($f);

                    $dx = Carbon::create($fx->year, $fx->month, $fx->day);
                    $dx2 = Carbon::create($fx2->year, $fx2->month, $fx2->day);

                    $daysForExtraCoding = $dx->diffInDaysFiltered(function(Carbon $date) 
                    {

                        return $date->isMonday();

                    }, $dx2);


                    $islr[] = 0.00;

                    $fdx = ($employee->cargo->salario * 12/52);
                    $fdt = ($assignmentsTotal[$key] * $deductions[0]->RPE);
                    $fdy = $assignmentsTotal[$key];

                    $sso[] = $fdx * $deductions[0]->SSO * $daysForExtraCoding;
                    $rpe[] = $fdt * $daysForExtraCoding;
                    $rpvh[] = $fdy * $deductions[0]->RPVH;
                        
                    $deductionsTotal[] = $sso[$key] + $rpe[$key] + $rpvh[$key];

                    $payments[] = $assignmentsTotal[$key] - $deductionsTotal[$key];


                    return view('admin.payroll.create', compact('employees', 'payments', 'quincena', 'mes', 'year', 'assignmentsTotal', 'deductionsTotal', 'sso', 'islr', 'rpe', 'rpvh', 'fechas', 'i', 'f', 'laborados', 'horasExtras'));
                }

            }else{

                Flash::warning('<strong> Error </strong>');

                return redirect()->back();
            }
        }      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = auth()->user();

        $fortnight = Payroll::create($request->all())->save();

        foreach ($request->cedula as $key => $cedula) 
        {

            $payrollMade = new PayrollMade();

                $payrollMade->usuario_id = $user->id;
                $payrollMade->cedula = $cedula;
                $payrollMade->nombre_completo = $request->nombre_completo[$key];
                $payrollMade->cargo = $request->cargo[$key];
                $payrollMade->salario_d = $request->salario_d[$key];
                $payrollMade->salario_m = $request->salario_m[$key];
                $payrollMade->islr = $request->islr[$key];
                $payrollMade->sso = $request->sso[$key];
                $payrollMade->rpe = $request->rpe[$key];
                $payrollMade->rpvh = $request->rpvh[$key];
                $payrollMade->laborados = $request->laborados[$key];
                $payrollMade->no_laborados = '0';

            $payrollMade->save();

            $payrollMade->payroll()->attach($fortnight);

        }
        

        Flash::success('<strong> Éxito </strong> se ha guardado la '.$request->quincena.' quincena del mes '.$request->mes.' del '.$request->year.' correctamente.');

        return redirect('admin/nomina');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        //
    public function show($id)
    {
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
