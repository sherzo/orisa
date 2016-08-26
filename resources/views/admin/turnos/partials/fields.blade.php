<?php 
	$k=0;
	$n=0;
	$count_employees=count($empleados); 	
?>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th> Empleados / Días </th>
@for($i=$planificacion->fecha_inicio; $i<=$planificacion->fecha_final ; $i = date('Y-m-d', strtotime($i ."+ 1 days")))
			<td class="text-center"> {{ $i }} <p class="text-info"> {{$planificacion->dias[$k]->estatus}} </p> </td>
		
		<?php 
			$id_dia[$k]=$planificacion->dias[$k]->id;
			$k++;
 		?>
@endfor
		</tr>
@foreach($empleados as $empleados)
		<tr>
			<td> {{$empleados->nombres}} </td>
@for($m=0;$m<$k;$m++)
			<td class="text-center"><input type="checkbox" name="<?=$n?>[]" title="mm<?=$n?>" value="{{$id_dia[$m]}}"></td>
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