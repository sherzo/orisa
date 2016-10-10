<div class="col-md-10 col-md-offset-1">
	<br>
	<hr>
	<p>Nro : {{ $comanda->id }}</p>
	<p>Mesa : {{ $comanda->table_id }}</p>
	<p>Fecha : {{ $comanda->created_at }}</p>
	<p>Hora: {{ $comanda->fecha }}</p>
	<p>Empleado: {{ $comanda->employe_id }}</p>
	<hr>
	<div class="col-md-1"></div>
	<br>
	<div class="col-md-14 center-block">
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th>Productos</th>
					<th>Cantidad</th>
					<th>Precio</th>
					<th>Precio total</th>
				</tr>
			</thead>
			<tbody>
				@foreach($platos as $plato)
					<tr>
						<td>{{ $plato->plato }}</td>
						<td>{{ $plato->id }}</td>
						<td>{{ $plato->precio }}</td>
						<td>{{ $plato->id }}</td>
					</tr>
				@endforeach

				@foreach($tragos as $trago)
					<tr>
						<td>{{ $trago->trago }}</td>
						<td>{{ $trago->id }}</td>
						<td>{{ $trago->precio }}</td>
						<td>{{ $trago->id }}</td>
					</tr>
				@endforeach

				@foreach($bebidas as $bebida)
					<tr>
						<td>{{ $bebida->bebida }}</td>
						<td>{{ $bebida->id }}</td>
						<td>{{ $bebida->precio }}</td>
						<td>{{ $bebida->id }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="row">
			<div class="col-md-12 tooltip-demo text-center">
			<br>
				<a class="btn btn-default btn-sm " type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Procesar" href="{{ route('admin.comandas.facturar', [$comanda->id]) }}"><span class="glyphicon glyphicon-copy fa-2x"></span></a>
				<a class="btn btn-default btn-sm " type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="PDF" href=""><span class="glyphicon glyphicon-print fa-2x"></span></a>
			</div>
		</div>
	</div>
</div>