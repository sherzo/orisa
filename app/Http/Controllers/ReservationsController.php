<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Reservation;
use App\User;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reservaciones = Reservation::all();

      return view('admin.reservations.index', compact('reservaciones'));
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
       foreach ($request->mesas_reservadas as $key => $mesa) {
            $cliente = Auth::user()->client[0]->id;
            $reservation = new Reservation($request->all());
            $date = Carbon::now()->format('d-m-Y');
            $reservation->fecha_solicitud = $date;
            $reservation->client_id = $cliente;
            $reservation->table_id = $mesa;

            $reservation->save();
         }
         $dias = array(1 => 'Domingo',2 => 'Lunes', 3 => 'Martes', 4 => 'Miercoles', 5 => 'Jueves', 6=> 'Viernes', 7 => 'Sabado');
         $dia_r = new Carbon($reservation->fecha_reservacion);
         foreach ($dias as $key => $value) {
           if($key == $dia_r->dayOfWeek){
             $dia = $value;
           }
         }
         Flash::success('<h4><strong>Perfecto realizo un resrevacion para el día: '. fecha($reservation->fecha_reservacion).' ingrese a su correo para confirmar.</h5>');

         return redirect()->back();

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
      $reservacion = Reservation::find($id);
      $reservacion->delete();

      Flash::success('<h4>Cancelo la reservacion del día: '. $reservacion->fecha_reservacion.'<h4>');


      return redirect()->back();
    }
}
