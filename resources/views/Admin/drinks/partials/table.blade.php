<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th>Bebida</th>
			<th>Característica</th>
			<th>Stock</th>
			<th>Unidad</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>								
		@foreach($drinks as $drink)
			<tr>
				<td>	
					<a href="{{ route('admin.bebidas.edit', [$drink->id]) }}">
						{{ $drink->id }}
					</a>
				</td>
				<td>
					<a href="{{ route('admin.bebidas.edit', [$drink->id]) }}">
						{{ $drink->bebida }}
					</a>		  
				</td>
				<td>
					<a href="{{ route('admin.bebidas.edit', [$drink->id]) }}">
						{{ $drink->caracteristica }}
					</a>
				</td>
				<td>
					<a href="{{ route('admin.bebidas.edit', [$drink->id]) }}">
						{{ $drink->stock }}
					</a>
				</td>
				<td>
					<a href="{{ route('admin.bebidas.edit', [$drink->id]) }}">
						{{ $drink->unit->unidad }}
					</a>
				</td>
				<td class="text-center tooltip-demo"> 					  
					<a class="btn btn-default btn-xs" href="{{ route('admin.bebidas.edit', $drink->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
					<a class="btn btn-default btn-xs" href="{{ route('admin.bebidas.destroy', $drink->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
