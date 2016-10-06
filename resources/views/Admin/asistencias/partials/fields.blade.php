<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td class="text-center">
				<input type="checkbox" id="select_all" onchange="desbloquear()">
			</td>
			<td> Nombres</td>
			<td> Turno</td>
			<td> Entrada</td>
			<td> Salida</td>
		</tr>
	</thead>
	<tbody>	
		@foreach($empleados as $key => $empleado)
			<tr>
				<td class="text-center">
					<input type="checkbox" name="empleados[]" value="{{ $empleado->id }}" onchange="desbloquear()">
					{!! Form::hidden('fecha', $fecha) !!}
				</td>
				<td> 
					{{ $empleado->full_name }} 
				</td>
				<td> 
					{{ $empleado->turno->turno }}
				</td>
				<td class="text-center"> 
					{!! Form::time('hora_entrada[]', $empleado->turno->hora_entrada, array('disabled' => 'disabled')) !!}
				</td>
				<td class="text-center">  
					{!! Form::time('hora_salida[]', $empleado->turno->hora_salida, array('disabled' => 'disabled')) !!}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
	<br>
	<div class="form-group tooltip-demo text-center">
		<button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
		<!-- <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button> -->
	    <br>
	</div> 