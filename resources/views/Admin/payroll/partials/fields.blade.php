<table class="table table-striped table-responsive">
	<tr>
		<th>CEDULA</th>
		<th>EMPLEADO</th>
		<th class="text-center">FECHA INGRESO</th>
		<th class="text-center">SALAR
		<th class="text-center">SALARIO DIARIO</th>
		<th class="text-center">TIEMPO ORDINAR.</th>
		<th class="text-center">HRS. EXTRA</th>
		<th>ISLR</th>
		<th>SSO</th>
		<th>RPE</th>
		<th>RPVH</th>
		<th>OTROS</th>
		<th>TOTAL</th>
		<th class="text-center">NETO A COBRAR</th>

	</tr>
	@foreach($employees as $employee)
		<tr>
			<td>
				{{ $employee->dni_cedula }}
			</td>
			<td>
				{{ $employee->full_name }}
			</td>
			<td>
				
			</td>
			<td class="text-center">
				{{ $employee->cargo->salario }}
			</td>
			<td class="text-center">
				{{ $employee->cargo->salario/30 }}
			</td>
			<td class="text-center">15</td>
			<td></td>
			<td class="text-center">0.00</td>
			<td class="text-center">4.00</td>
			<td class="text-center">0.50</td>
			<td class="text-center">1.00</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	@endforeach
</table>
