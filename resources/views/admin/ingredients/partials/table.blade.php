<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th>Ingrediente</th>
			<th>Categoria</th>
			<th>Característica</th>
			<th>Stock</th>
			<th>Unidad</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($ingredients as $ingredient)
		<tr>
			<td>
				<a href="{{ route('admin.ingredientes.edit', $ingredient) }}">
					{{ $ingredient->id }}
				</a>
			</td>
			<td>
				<a href="{{ route('admin.ingredientes.edit', $ingredient) }}">
					{{ $ingredient->ingrediente }}
				</a>
			</td>
			<td>
				<a href="{{ route('admin.ingredientes.edit', $ingredient) }}">
					{{ $ingredient->type->tipo_ingrediente }}
				</a>
			</td>
			<td>
				<a href="{{ route('admin.ingredientes.edit', $ingredient) }}">
					{{ $ingredient->caracteristica }}
				</a>
			</td>
			<td>
				<a href="{{ route('admin.ingredientes.edit', $ingredient) }}">
					{{ $ingredient->stock }}
				</a>
			</td>
			<td>
				<a href="{{ route('admin.ingredientes.edit', $ingredient) }}">
					{{ $ingredient->unit->unidad }}
				</a>
			</td>                                  
			<td class="text-center tooltip-demo">
				<a class="btn btn-default btn-xs" href="{{ route('admin.ingredientes.edit', $ingredient) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
				<a class="btn btn-default btn-xs" href="{{ route('admin.ingredientes.destroy', $ingredient->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>