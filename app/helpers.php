<?php

function currentUser()
{
    return auth()->user();
}

function bitacora($descripcion, $operacion, $operacion_id){
  $bitacora = new App\Bitacora();
  $bitacora->user_id = auth()->user()->id;
  $bitacora->descripcion = $descripcion;
  $bitacora->operacion = $operacion;
  $bitacora->operacion_id = $operacion_id;
  $bitacora->save();
}
