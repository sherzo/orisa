<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th>Cedula</th>
			<th>Nombres</th>
			<th>Laborados</th>
			<th>Acciones</th>
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
			<td class="text-center tooltip-demo"> 					  
				<a class="btn btn-default btn-xs" href="" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></span></a>
				<a class="btn btn-default btn-xs" href="" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
				<a href="" class="btn btn-default btn-xs" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
