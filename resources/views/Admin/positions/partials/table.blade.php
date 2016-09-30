<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th> Código </th>
			<th> Cargo </th>
			<th> Sueldo </th>
			<th> Acciones </th>
		</tr>
	</thead>
<tbody>
	@foreach($positions as $position)
		<tr>
			<td>
				<a href="#">
					{{ $position->id }}
				</a>
			</td>
			<td>
				<a href="#">
					{{ $position->codigo }}
				</a>
			</td>
			<td>
				<a href="#">
					{{ $position->nombre }}
				</a>
			</td>
			<td>
				<a href="#">
					{{ $position->salario }}
				</a>
			</td>
			<td class="text-center">
				<a class="btn btn-default btn-xs" href="{{ route('admin.cargos.edit', [$position]) }}"> <span class="glyphicon glyphicon-pencil fa-2x"></span> </a>
				<a class="btn btn-default btn-xs"  href="{{ route('admin.cargos.destroy', [$position->id]) }}" title="Eliminar"> <span class="glyphicon glyphicon-trash fa-2x"></span> </a>
			</td>
		</tr>
	@endforeach                       
</tbody>
</table>
