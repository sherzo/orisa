<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

use App\Http\Requests\PayrollRequest;
use App\Http\Requests;

use Carbon\Carbon;
use App\Deduction;
use App\Employee;
use App\ExtraHour;
use App\Planning;
use App\Holiday;
use App\PayrollMade;
use App\Payroll;
use App\Cestaticket;
use App\Assistance;
use App\Assignment;
use App\DeductionExtra;
use App\Days_planning;
use App\Day_attendance;
use Sentinel;

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
    public function create(PayrollRequest $request)
    {
        $fecha = $request->año.'-'.$request->mes;

        $mes = $request->mes;
        $year = $request->año;
        $quincena = $request->quincena;

        $payroll = Payroll::where([['year', $request->año],['mes', $request->mes],['quincena', $request->quincena], ['est', 1]])->exists();

        $employees = Employee::all();
        $deductions = Deduction::first();
        $cestaticket = Cestaticket::all();

        if($payroll){

            Flash::warning('<strong> Disculpe </strong> la prenómina seleccionada se encuentra registrada.');

            return redirect()->back();

        } else {

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

            return view('admin.payroll.create', compact('employees', 'cestaticket', 'mes', 'year', 'quincena', 'i', 'f', 'assistances', 'dates', 'deductions'));
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
        //dd($request->all());
        $user = Sentinel::getUser();

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
                $payrollMade->no_laborados = $request->no_laborados[$key];
                $payrollMade->cestaticket = $request->cestaticket[$key];
                $payrollMade->cestaticket_des = $request->cestaticket_des[$key];
                $payrollMade->salario_total = $request->salario_total[$key];

            $payrollMade->save();

            $payrollMade->payroll()->attach($fortnight);

        }

        //$delete_dx = \DB::table('temporary_assignments')->truncate();
        //$delete_dy = \DB::table('temporary_deductions')->truncate();

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

    public function view()
    {
        $payroll = Payroll::all();

        return view('admin.payroll.view', compact('payroll'));
    }

    public function show2(Request $request)
    {
        $payroll = Payroll::all();
        $payroll_here = Payroll::find($request->id);
        $payroll_list = Payroll::find($request->id);
        $payroll_show = $payroll_list->payroll;

        return view('admin.payroll.view', compact('payroll', 'payroll_show', 'payroll_here', 'payroll_list'));
    }

    public function pdf($id)
    {
        $payroll_show = Payroll::find($id)->payroll;
        $pdf =  \PDF::loadView('admin.payroll.invoice', ['payroll_show' => $payroll_show]);
        return $pdf->stream();
    }

}
