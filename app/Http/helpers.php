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

	/* - - - - - - - - NÓMINA  - - - - - - - - */

	function laborados($empleado, $asistencias)
	{
		$newLaborados = 0;

		foreach ($asistencias as $key => $asistencia) 
		{
			$laborados = App\Assistance::where([['empleado_id', $empleado], ['asistencia_id', $asistencia->id], ['motivo', 'Asistio']])->first();

			if(!empty($laborados))
			{
				$newLaborados = $newLaborados+1;
			}
		}


		return $newLaborados;
	}

	function horasExtras($empleado, $asistencias)
	{

		foreach ($asistencias as $key => $asistencia) 
		{
			$laborados = App\Assistance::where([['empleado_id', $empleado], ['asistencia_id', $asistencia->id], ['motivo', 'Asistio']])->first();

			if(!empty($laborados))
			{
				$entrada = Carbon::parse($laborados->hora_entrada);
				$salida = Carbon::parse($laborados->hora_salida);

				$time = Carbon::createFromTime($entrada->hour, $entrada->minute, $entrada->second);
	           	$time2 = Carbon::createFromTime($salida->hour, $salida->minute, $salida->second);

				$timeForExtraCoding = $entrada->diffInHours($salida, false);
				//dd($timeForExtraCoding);
				if($timeForExtraCoding > '8')
	            {
	                $extraHourEmployee[] = $timeForExtraCoding-8;
	            
	            } else {

	                $extraHourEmployee[] = 0;
	            }
			}
		}

		$i = 0;

		foreach ($extraHourEmployee as $key => $extraHour) 
		{
			$i += $extraHour;
		}

		return $i;
	}		

	function totalAsignacion($horasExtras, $empleado)
	{
		$salario = ($empleado->cargo->salario * 12/52);
		$salarioDiario = $empleado->cargo->salario/30;

		if($empleado->turno->turno == 'Mañana')
		{
			$valor = ($salarioDiario / 8);	
			$salarioxHora = $valor * 1.5;

			$total = $salarioxHora * $horasExtras;

		} else {

			$valor = ($salarioDiario / 8);	
			$salarioxHora = $valor * 1.8;

			$total = $salarioxHora * $horasExtras;
		}

		

		return number_format($total, 2, ',', ' ');
	}

	function sso($empleado, $sso, $i, $f)
	{
		$fx = Carbon::parse($i);
        $fx2 = Carbon::parse($f);

        $dx = Carbon::create($fx->year, $fx->month, $fx->day);
        $dx2 = Carbon::create($fx2->year, $fx2->month, $fx2->day);

        $daysForExtraCoding = $dx->diffInDaysFiltered(function(Carbon $date)
        {
            return $date->isMonday();
        }, $dx2);


		$salario = ($empleado->cargo->salario * 12/52);
		
		$seguroSO = $salario * $sso * $daysForExtraCoding;
		
		return number_format($seguroSO, 2, ',', ' ');
	}

	function rpe($empleado, $rpe, $i, $f)
	{
		$fx = Carbon::parse($i);
        $fx2 = Carbon::parse($f);

        $dx = Carbon::create($fx->year, $fx->month, $fx->day);
        $dx2 = Carbon::create($fx2->year, $fx2->month, $fx2->day);

        $daysForExtraCoding = $dx->diffInDaysFiltered(function(Carbon $date)
        {
            return $date->isMonday();
        }, $dx2);

		$salario = ($empleado->cargo->salario * 12/52);
		$paroForzoso = $salario * $rpe * $daysForExtraCoding;
		
		return number_format($paroForzoso, 2, ',', ' ');
	}

	function rpvh($asignacion, $empelado, $rpe, $i, $f)
	{
		# code...
	}
