<?php 
	$k=0;
	$n=0;
	$count_employees=count($empleados);
	$empleado_id = array(); 	
?>
<div>
	@include('flash::message')
</div>
<div class="table-responsive">
	<table class="table table-striped">
		<tr class="odd gradeA">
			<th>{!! Form::hidden('planificacion_id', $planificacion->id) !!}</th>

@for($i=$planificacion->fecha_inicio; $i<=$planificacion->fecha_final ; $i = date('Y-m-d', strtotime($i ."+ 1 days")))
			<td class="text-center"> {{ $i }} <p class="text-info"> {{$planificacion->dias[$k]->estatus}} </p> </td>
		<?php 
			$dia_id[$k]=$planificacion->dias[$k]->id;
			$k++;
 		?>
@endfor
		</tr>
@foreach($empleados as $empleado)
		<tr>
			<td> {{ $empleado->full_name }}</td>
@for($m=0;$m<$k;$m++)
			<td class="text-center"> <input type="checkbox" name="empleado_id[<?=$empleado->id?>][]" value="{{$dia_id[$m]}}" title="Marqué la opción correspondiente al día laboral del empleado"> </td>

@endfor
		</tr>
		<?php 
			$n++;
		?>
@endforeach
	</table>
	<div class="col-lg-1 col-lg-offset-11">
		<button type="submit" class="btn btn-primary btn-sm"> Guardar </button><br><br>
	</div>
</div>

