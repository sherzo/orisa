<?php
use Carbon\Carbon;

function currentUser()
{
    return Sentinel::getUser();
}

function bitacora($descripcion, $operacion, $operacion_id){
  $bitacora = new App\Bitacora();
  $bitacora->user_id = Sentinel::getUser()->id;
  $bitacora->descripcion = $descripcion;
  $bitacora->operacion = $operacion;
  $bitacora->operacion_id = $operacion_id;
  $bitacora->save();
}


function fecha($created_at)
{
  $fecha = new Carbon($created_at);
  $dias = array(1 => 'Domingo',2 => 'Lunes', 3 => 'Martes', 4 => 'Miercoles', 5 => 'Jueves', 6=> 'Viernes', 7 => 'Sabado');

  foreach ($dias as $key => $value) {
    if($key == $fecha->dayOfWeek){
      $dia = $value;
    }
  }

  return $dia.' '.$fecha->format('d-m-Y');
}

function hora($created_at)
{
  $fecha = new Carbon($created_at);
  return $fecha->format('g:i a');
}
