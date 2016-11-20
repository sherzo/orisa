<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DeductionExtra;
use Laracasts\Flash\Flash;

class DeductionsExtrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $others_deductions = DeductionExtra::all();

        return view('admin.deductions_extra.index', compact('others_deductions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.deductions_extra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $others_deductions = DeductionExtra::create($request->all())->save();

        Flash::success('<strong> Éxito </strong> se ha registrado una nueva deducción '.$request->nombre.' correctamente.');

        return redirect('admin/deducciones_extras ');
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
        $others_deductions = DeductionExtra::findOrfail($id);

        return view('admin.deductions_extra.edit', compact('others_deductions'));
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
        $others_deductions = DeductionExtra::find($id);

        $others_deductions->fill($request->all());
        $others_deductions->save();

        Flash::success('<strong> Éxito </strong> se ha actualizao la deducción '.$request->nombre.' correctamente.');

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
