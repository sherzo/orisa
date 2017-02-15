<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Purchase;
use App\Reservation;
use App\Command;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Sentinel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Sentinel::getUser()->roles()->first()->slug == 'Tipo 5'){
          return redirect('/');
        }

        $date = Carbon::now()->format('Y-m-d');
        $reservaciones = Reservation::where('fecha_reservacion', $date)->get();
        $ordenes = Purchase::where('estatus', 'En espera')->get();
        $facturas = Command::where('estatus', 'Procesada')->get();
        return view('home', compact('ordenes', 'reservaciones', 'facturas'));
    }
}
