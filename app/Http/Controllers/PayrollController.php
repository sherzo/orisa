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
use App\Assignment;
use App\DeductionExtra;
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

        $mes = $request->mes;
        $year = $request->año;
        $quincena = $request->quincena;

        $totalAllassignments = 0;
        $totalAllpayments = 0;

        $employees = Employee::all();
        $deductions = Deduction::all();
        $assignments = Assignment::all();
        $deductions_extra = DeductionExtra::all();

        $count = count($employees);

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

                        $others_assignments_pivot = Employee::find($employee->id);

                        foreach ($others_assignments_pivot->assignmentsTemporary as $others_assignments_pivot)
                        {
                            $others_assignments[] = $others_assignments_pivot->pivot;
                            $others_assignments_dx[] = $others_assignments_pivot;
                        }

                        $others_deductions_pivot = Employee::find($employee->id);

                        foreach ($others_deductions_pivot->deductionsTemporary as $others_deductions_pivot)
                        {
                            $others_deductions[] = $others_deductions_pivot->pivot;
                            $others_deductions_dx[] = $others_deductions_pivot;
                        }

                        if(!empty($others_assignments))
                        {

                            foreach ($others_assignments as $xd => $others_assignments_dy)
                            {
                                if($others_assignments_dy->empleado_id == $employee->id)
                                {
                                    for ($m=0; $m < count($others_assignments_dx) ; $m++)
                                    {
                                        if($others_assignments_dy->estatus == 0)
                                        {
                                            $assignmentsTotal[$key] += $others_assignments_dx[$m]->valor;
                                        }
                                    }
                                }
                            }

                        }

                        if(!empty($others_deductions))
                        {
                            foreach ($others_deductions as $xi => $others_deductions_dy)
                            {
                                if($others_deductions_dy->empleado_id == $employee->id)
                                {
                                    for ($n=0; $n < count($others_deductions_dx) ; $n++)
                                    {
                                        if($others_deductions_dy->estatus == 0)
                                        {
                                            $deductionsTotal[$key] += $others_deductions_dx[$n]->valor;
                                        }
                                    }
                                }
                            }
                        }

                        $payments[] = $assignmentsTotal[$key] - $deductionsTotal[$key];
                        $totalAllassignments += $assignmentsTotal[$key];
                        $totalAllpayments += $payments[$key];

                    }

            return view('admin.payroll.create', compact('employees', 'assignments', 'totalAllpayments', 'totalAllassignments', 'deductions_extra', 'others_assignments', 'others_deductions', 'count', 'payments', 'mes', 'year', 'quincena', 'assignmentsTotal', 'deductionsTotal', 'sso', 'islr', 'rpe', 'rpvh', 'fechas', 'i', 'f', 'laborados', 'horasExtras'));

            }else{

                Flash::warning('<strong> Error </strong> no se encontraron resultados coincidentes.');

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

            $delete_dx = \DB::table('temporary_assignments')->truncate();
            $delete_dy = \DB::table('temporary_deductions')->truncate();

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
