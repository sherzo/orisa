{!! Form::hidden('planificacion_id', $planificacion->id) !!}

<table class="table table-bordered">
	<thead>
		<tr>
			@for($i = 0; $i <= $dias; $i++)
				<td style="width: 200px; font-size: 10px;" class="text-center">{{ dias($fechas[$i]) }}</td>
				<?php $dia_id[]=$planificacion->dias[$i]->id; ?>
			@endfor
		</tr>
		<tr>
			@for($i = 0; $i <= $dias; $i++)
				<td style="width: 200px; font-size: 10px;" class="text-center">{{ $planificacion->dias[$i]->dia }}</td>
			@endfor
		</tr>
		<tr>
			@for($i = 0; $i <= $dias; $i++)
				@if($planificacion->dias[$i]->estatus == 'Laborable')
					<td style="width: 200px; font-size: 10px;" class="text-center text-info">		{{ $planificacion->dias[$i]->estatus }}
					</td>
				@else
					<td style="width: 200px; font-size: 10px;" class="text-center text-danger">		{{ $planificacion->dias[$i]->estatus }}
					</td>
				@endif
			@endfor
		</tr>	
	</thead>
</table>
	
<table class="table table-bordered">
	<thead>
		<tr>
			<td class="text-center">NOMBRES</td>
			@for($i = 0; $i <= $dias; $i++)
				<td style="width: 200px; font-size: 10px;" class="text-center">{{ dias($fechas[$i]) }}</td>
				<?php $dia_id[]=$planificacion->dias[$i]->id; ?>
			@endfor
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>		
			<td colspan="{{ count($fechas) }}" class="text-center"> MAÑANA </td>
		</tr>
		@foreach($empleados as $empleado)
			<tr>

				@if($empleado->turno->turno == 'Mañana')
					<td style="width: 15%;">
						{{ $empleado->full_name }}
					</td>

					@for($j=0; $j <= $dias; $j++)
						<td class="text-center">
							<input type="checkbox" name="empleado_id[<?=$empleado->id?>][]" value="{{ $dia_id[$j] }}" title="Marqué la opción correspondiente al día laboral del empleado">
						</td>
					@endfor
				@endif
			</tr>
		@endforeach
		<tr>
			<td></td>	
			<td colspan="{{ count($fechas) }}" class="text-center"> NOCHE </td>
		</tr>
		@foreach($empleados as $empleado)
			<tr>
				@if($empleado->turno->turno == 'Noche')
					<td style="width: 15%;">
						{{ $empleado->full_name }}
					</td>

					@for($i=0; $i <= $dias; $i++)
						<td class="text-center">
							<input type="checkbox" name="empleado_id[<?=$empleado->id?>][]" value="{{ $dia_id[$i] }}" title="Marqué la opción correspondiente al día laboral del empleado">
						</td>
					@endfor
				@endif
			</tr>
		@endforeach
	</tbody>
</table>
