<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th>Proveedor</th>
			<th>Fecha</th>
			<th>Estatus</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>								
	@foreach($orders as $key => $order)
		<tr>
			<td>
				{{ $order->id }}
			</td>
			<td>
				{{ $order->provider->razon_social }}		  
			</td>
			<td>
				{{ $order->fecha }}
			</td>
			<td class="text-center">
				<span class="label {!! $order->estatus == 0 ? 'label-warning' : 'label-success' !!}">
					{{ $order->estatus == 0 ? 'En espera' : 'Recibido'}}
				</span>
			</td>
			<td class="text-center tooltip-demo"> 					  
				<a class="btn btn-default btn-xs" href="{{ route('admin.compra.show', $order->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></a>
				<a class="btn btn-default btn-xs" href="{{ route('admin.compra.destroy', $order->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
