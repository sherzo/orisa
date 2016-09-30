<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th>Licor</th>
			<th>Categoría</th>
			<th>Característica</th>
			<th>Unidad</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($liqueurs as $liqueur)
			<tr>
				<td>
					<a href="{{ route('admin.licores.edit', $liqueur) }}">
						{{ $liqueur->id }}
					</a>
				</td>
				<td>
					<a href="{{ route('admin.licores.edit', $liqueur) }}">
					{{ $liqueur->licor }}
				</td>
				<td>
					<a href="{{ route('admin.licores.edit', $liqueur) }}">
						{{ $liqueur->type->tipo_licor }}
					</a>
				<td>
					<a href="{{ route('admin.licores.edit', $liqueur) }}">
						{{ $liqueur->caracteristica }}
					</a>
				</td>
				<td>
					<a href="{{ route('admin.licores.edit', $liqueur) }}">
						{{ $liqueur->unit->unidad }}
					</a>
				</td>
				<td class="text-center tooltip-demo">
					<a class="btn btn-default btn-xs" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></span></a>
					<a class="btn btn-default btn-xs" href="{{ route('admin.licores.edit', $liqueur) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
					<a class="btn btn-default btn-xs" href="{{ route('admin.licores.destroy', $liqueur) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
				</td>
			</tr>
		@endforeach												 
	</tbody>
</table>