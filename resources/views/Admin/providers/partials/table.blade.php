<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th>Rif</th>
			<th>Razón Social</th>
			<th>Teléfono</th>
			<th>E-mail</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>										
	@foreach($providers as $provider)
		<tr>
			<td>
				<a href="{{ route('admin.proveedores.edit', $provider) }}">
					{{ $provider->id }}
				</a>
			</td>
			<td>
				<a href="{{ route('admin.proveedores.edit', $provider) }}">
					{{ $provider->rif }}
				</a>
			</td>
			<td>
				<a href="{{ route('admin.proveedores.edit', $provider) }}">
					{{ $provider->razon_social }}
				</a>
			</td>
			<td>
				<a href="{{ route('admin.proveedores.edit', $provider) }}">
					{{ $provider->telefono }}
				</a>
			</td>
			<td>
				<a href="{{ route('admin.proveedores.edit', $provider) }}">
					{{ $provider->correo }}
				</a>
			</td>
			<td class="text-center tooltip-demo">
				<a class="btn btn-default btn-xs" href="{{ route('admin.compra.create') }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Encargo"><span class="glyphicon glyphicon-shopping-cart fa-2x"></span></a>
				<a class="btn btn-default btn-xs" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></span></a>
				<a class="btn btn-default btn-xs" href="{{ route('admin.proveedores.edit', $provider) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
				<a class="btn btn-default btn-xs" href="{{ url('admin/proveedores') }}/{{$provider->id}}/destroy" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
			</td>
		</tr>
	@endforeach													 
	</tbody>
</table>