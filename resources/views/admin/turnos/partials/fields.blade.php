{{-- */$k=0;/* --}}
{{-- */$n=0;/* --}}
{{-- */$count_employees=count($empleados);/* --}}
{{-- */$empleado_id = array();/* --}}

<table class="table table-striped table-responsive">
	<tr>
		<td class="text-center">
			{!! Form::checkbox('select_all', 'select_all', false,['id' => 'select_all', 'class' => 'form-group']) !!}
			{!! Form::hidden('planificacion_id', $planificacion->id) !!}
		</td>

	@for($i=$planificacion->fecha_inicio; $i<=$planificacion->fecha_final ; $i = date('Y-m-d', strtotime($i ."+ 1 days")))
		<td class="text-center"> 

			{{ $i }} 

			<p class="text-info"> 
				{{ $planificacion->dias[$k]->estatus }} 
			</p> 
		</td>

			{{-- */$dia_id[$k]=$planificacion->dias[$k]->id;/* --}}
			{{-- */$k++;/* --}}
 	
	@endfor
		</tr>
	@foreach($empleados as $empleado)
		<tr>
			<td> {{ $empleado->nombres }} </td>
		@for($m=0;$m<$k;$m++)
			<td class="text-center"> 
				<input type="checkbox" name="empleado_id[<?=$empleado->id?>][]" value="{{$dia_id[$m]}}" title="Marqué la opción correspondiente al día laboral del empleado"> 
			</td>
		@endfor
		</tr>
			{{-- */$n++;/* --}} 
	@endforeach
</table>
	
