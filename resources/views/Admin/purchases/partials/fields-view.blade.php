<div class="col-md-10 col-md-offset-1">
	<br>
	<hr>
	<p>Rif : {{ $order->provider->rif }}</p>
	<p>Razón Social : {{ $order->provider->razon_social }}</p>
	<p>Teléfono : {{ $order->provider->full_phone }}</p>
	<p>Fecha : {{ $order->fecha }}</p>
	<hr>
	<div class="col-md-1"></div>
	<br>
	<div class="col-md-14 center-block">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Productos</th>
					<th>Cantidad</th>
					<th>Unidad</th>
					<th>Características</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ingredients as $ingredient)
					<tr>
						<td>{{ $ingredient->ingrediente }}</td>
						<td>{{ $ingredient->pivot->cantidad }}</td>
						<td>{{ $ingredient->unit->unidad }}</td>
						<td>{{ $ingredient->caracteristica }}</td>
					</tr>
				@endforeach

				@foreach($liqueurs as $liqueur)
					<tr>
						<td>{{ $liqueur->licor }}</td>
						<td>{{ $liqueur->pivot->cantidad }}</td>
						<td>{{ $liqueur->unit->unidad }}</td>
						<td>{{ $liqueur->caracteristica }}</td>
					</tr>
				@endforeach

				@foreach($drinks as $drink)
					<tr>
						<td>{{ $drink->bebida }}</td>
						<td>{{ $drink->pivot->cantidad }}</td>
						<td>{{ $drink->unit->unidad }}</td>
						<td>{{ $drink->caracteristica }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="row">
			<div class="col-md-12 tooltip-demo text-center">
			<br>
				<a class="btn btn-default btn-sm " type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Procesar" href="{{ route('admin.compra.procesar', [$order->id]) }}"><span class="glyphicon glyphicon-copy fa-2x"></span></a>
				<a class="btn btn-default btn-sm " type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="PDF" href=""><span class="glyphicon glyphicon-print fa-2x"></span></a>
			</div>
		</div>
	</div>
</div>