<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use Carbon\Carbon;
use App\Http\Requests;

class InvoicesController extends Controller
{
    public function index(){

    }

    public function movimiento()
    {
      $date = Carbon::now()->format('Y-m-d');
      $facturas = Invoice::where('created_at', 'LIKE', $date." %")->get();

      // dd($facturas);

      return view('admin.invoice.movimiento',compact('facturas'));
    }

}
