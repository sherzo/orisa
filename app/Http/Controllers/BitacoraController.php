<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bitacora;
use App\Http\Requests;

class BitacoraController extends Controller
{
    public function index(){
      $operaciones = Bitacora::all();
      return view('admin.bitacora.index', compact('operaciones'));
    }
}
