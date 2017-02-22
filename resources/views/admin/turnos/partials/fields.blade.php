<table class="table table-striped table-bordered table-hover">
	<tr>
		<td class="text-center">
			{!! Form::checkbox('select_all', 'select_all', false,['id' => 'select_all', 'class' => 'form-group']) !!}
			{!! Form::hidden('planificacion_id', $planificacion->id) !!}
		</td>

	@for($i=$planificacion->fecha_inicio; $i<=$planificacion->fecha_final ; $i = date('Y-m-d', strtotime($i ."+ 1 days")))
		<td class="text-center"> 
			<span type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $i }}"><p class="text-info"> 
				{{ $planificacion->dias[$k]->estatus }} 
			</p></span>
		</td>

			{{-- */$dia_id[$k]=$planificacion->dias[$k]->id;/* --}}
			{{-- */$k++;/* --}}
 	
	@endfor
		</tr>
	@foreach($empleados as $empleado)
		<tr>
			<td> {{ $empleado->full_name }} </td>
		@for($m=0;$m<$k;$m++)
			<td class="text-center"> 
				<input type="checkbox" name="empleado_id[<?=$empleado->id?>][]" value="{{$dia_id[$m]}}" title="Marqué la opción correspondiente al día laboral del empleado"> 
			</td>
		@endfor
		</tr>
			{{-- */$n++;/* --}} 
	@endforeach
</table>
	