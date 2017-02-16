<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th>Cedula</th>
			<th>Nombres</th>
			<th>Laborados</th>
		</tr>
	</thead>

	<tbody>							
	@foreach($payrollMade as $payrollMade)
		<tr>
			<td>
				{{ $payrollMade->id }}
			</td>
			<td>
				{{ $payrollMade->cedula }}
			</td>
			<td>
				{{ $payrollMade->nombre_completo }}
			</td>
			<td>
				{{ $payrollMade->laborados }}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>