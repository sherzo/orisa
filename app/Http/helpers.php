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

	/* - - - - - - - - PLANIFICACIÓN  - - - - - - - - */

	function dias($fechas)
	{

		$fechats = strtotime($fechas);
        	switch (date('w', $fechats))
        	{
                case 0: return "DOMINGO";   break;
                case 1: return "LUNES";     break;
                case 2: return "MARTES";    break;
                case 3: return "MIÉRCOLES"; break; 
                case 4: return "JUEVES";    break;
                case 5: return "VIERNES";   break; 
                case 6: return "SÁBADO";    break;
            }
	}

	function asignados($empleado, $dia, $planificacion)
	{
		$labora = \DB::table('employees_has_days')->where([['empleado_id', $empleado], ['dia_id', $dia], ['planificacion_id', $planificacion]])->exists();

		return $labora;
	}