<div class="row">
	<div class="col-md-12">
		<h3 class="text-center">Orden de compra N° {{ $purchase->id }}</h3>
	</div>
	<div class="col-md-12">Proveedor: </div>
	<div class="col-md-12">Fecha: {{ $purchase->fecha }}</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover">
			<thead>
				<th>#</th>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Unidad</th>
				<th>Descripción</th>		
			</thead>			
			<tbody>
				@foreach($purchase->purchase_ingredients as $key => $p_ingredient)
					
					<tr>
						<td>{{ $p_ingredient->id }}</td>
						<td>
						@foreach($ingredients as $key2 => $ingredient)
							@if($key2 == $key)
								
								{{ $ingredient->nombre_ingrediente }}

							@endif
						@endforeach
						</td>
						<td>{{ $p_ingredient->cantidad }}</td>
						<td>						
						@foreach($units_i as $key2 => $unit)
							@if($key2 == $key)
								@foreach($unit as $key3 => $unidad)									
								
									{{ $unidad->unidad }}
							
								@endforeach
							@endif
						@endforeach
						</td>
						<td>{{ $ingredients[0]->caracteristica }}</td>
					</tr>

				@endforeach
				@foreach($purchase->purchase_liqueurs as $key => $p_liqueur)
					
					<tr>
						<td>{{ $p_liqueur->id }}</td>
						<td>
						@foreach($liqueurs as $key2 => $liqueur)
							@if($key2 == $key)
								
								{{ $liqueur->nombre_licor }}

							@endif
						@endforeach
						</td>
						<td>{{ $p_liqueur->cantidad }}</td>
						<td>						
						@foreach($units_l as $key2 => $unit)
							@if($key2 == $key)
								@foreach($unit as $key3 => $unidad)									
								
									{{ $unidad->unidad }}
							
								@endforeach
							@endif
						@endforeach
						</td>
						<td>{{ $liqueurs[0]->caracteristica }}</td>
					</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-md-12 text-center">
		<button class="btn btn-default btn-sm " title="Procesar">
			<span class="fa fa-eye fa-2x"></span>
		</button>
		<button class="btn btn-default btn-sm " title="Imprimir">
			<span class="fa fa-print fa-2x"></span>
		</button>
	</div>
</div>