<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th> Código </th>
			<th> Cargo </th>
			<th> Salario </th>
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
				<a class="btn btn-warning btn-circle" href="{{ route('admin.cargos.edit', [$position]) }}"> <span class="fa fa-pencil"></span> </a>
				<a class="btn btn-danger btn-circle"  href="{{ route('admin.cargos.destroy', [$position->id]) }}" title="Eliminar"> <span class="fa fa-trash-o"></span> </a>
			</td>
		</tr>
	@endforeach                       
</tbody>
</table>
