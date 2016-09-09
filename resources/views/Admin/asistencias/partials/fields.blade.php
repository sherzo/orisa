<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td class="text-center"> 
				<input type="checkbox" id="select_all">
			</td>
			<td> Nombres</td>
			<td> Turno</td>
			<td> Entrada</td>
			<td> Salida</td>
			
		</tr>
	</thead>
	<tbody>	
		@foreach($empleados as $empleado)
			<tr>
				<td class="text-center">
					{!! Form::checkbox('empleados[]', $empleado->id) !!}
				</td>
				<td> 
					{{ $empleado->full_name }} 
				</td>
				<td> 
					{{ $empleado->turno->turno }}
				</td>
				<td class="text-center"> 
					{!! Form::time('hora_entrada', $empleado->turno->hora_entrada) !!}
				</td>
				<td class="text-center">  
					{!! Form::time('hora_salida', $empleado->turno->hora_salida) !!}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<div class="col-lg-offset-11">
	<button type="submit" class="btn btn-primary btn-sm"> Guardar </button>
</div>