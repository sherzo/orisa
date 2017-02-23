<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Categoría</th>
			<th>Monto</th>
			<th>Tipo</th>
			<th>Descripción</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($adicionales as $adicional)
			<tr>
				<td>
					{{ $indice = $indice+1 }}
				</td>
				<td>
					{{ $adicional->nombre }}
				</td>
				<td>
					@if($adicional->modo_pago == 'D')
						Día
					@elseif ($adicional->modo_pago == 'P')
						Porcentaje
					@else
						Valor
					@endif
				</td>
				<td>
					{{ $adicional->monto }}
				</td>
				<td>
					@if($adicional->tipo == 'A')
						Asignación 
					@else
						Deducción
					@endif
				</td>
				<td>
					{{ $adicional->descripcion }}
				</td>
				<td class="text-center">
					<a class="btn btn-default btn-xs" href="{{ route('admin.adicionales.edit', $adicional->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
					<a class="btn btn-default btn-xs" href="{{ route('admin.adicionales.destroy', $adicional->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
				</td>
			</tr>
		@endforeach										 
	</tbody>
</table>