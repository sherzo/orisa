<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plate;
use App\Portal;
use Laracasts\Flash\Flash;


use App\Http\Requests;

class PortalController extends Controller
{
    public function index()
    {
      $plates = Plate::all();

      // Flash::info('<strong>Info </strong> seleccione <strong>6 platos</strong> que se mostraran en el portal');

      return view('admin.portal.index', compact('plates'));
    }

    public function save(Request $request)
    {
      $portales = Portal::all();

      if($portales->count() > 0){
        $ultimo = $portales->last();
        $ultimo->estatus = false;
        $ultimo->save();
      }

      $portal = new Portal();
      $portal->save();

      foreach ($request->platos as $key => $plate) {
        $portal->plates()->attach($plate);
      }

      Flash::success('<strong>¡Perfecto! </strong> los platos seleccionados ya se muestran en el portal');

      return redirect('admin/platos-del-dia');

    }
}
