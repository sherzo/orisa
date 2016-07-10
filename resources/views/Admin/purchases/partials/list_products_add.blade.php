	{!! Form::open(['route' => 'admin.compra.store', 'method' => 'POST']) !!}

<div class="row">

	<div class="col-md-10 col-md-offset-1">
	<hr>
	<h3>Productos agregados</h3>
<p class="text-muted center-block">Ingrese cantidades</p>
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Remover</th>
				<th></th>
			</thead>
				
			<tbody>
			<input type="text" name="id_proveedor" value="{{ $id_proveedor }}">
				@if($data_ingredient)

					@foreach($data_ingredient as $key => $ingredient)
				<tr>
				<td>
				{{$ingredient->id}}
					
					<input type="hidden" name="ingredients[]" value="{{ $ingredient->id }}">
				</td>
					<td>{{ $ingredient->nombre_ingrediente }}</td>
					<td>
					<div class="input-group">
		
						{!! Form::text('cantidad_ingredient[]', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad del ingrediente para la orden']) !!}

						<span class="input-group-addon">
						@foreach($units_i as $key2 => $unit)
							@if($key2 == $key)
								@foreach($unit as $key3 => $unidad)									
								
									{{ $unidad->unidad }}
							
								@endforeach
							@endif
						@endforeach
						</span>
					</div>
					</td>
				
					<td>
						<a class=" btn btn-danger btn-sm center">
							<span class="glyphicon glyphicon-remove
							glyphicon "></span>
						</a>
					</td>
					
				</tr>
					@endforeach

				@endif

	<!-- -------------------------- Lista de licores ----------------------------- -->

				@if($data_liqueur)

					@foreach($data_liqueur as $key => $liqueur)
				<tr>
				<td>
				{{$liqueur->id}}
					
					<input type="hidden" name="liqueurs[]" value="{{ $liqueur->id }}">
				</td>
					<td>{{ $liqueur->nombre_licor }}</td>
					<td>
					<div class="input-group">
		
						{!! Form::text('cantidad_liqueur[]', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad del licor para la orden']) !!}

						<span class="input-group-addon">
						@foreach($units_l as $key2 => $unit)
							@if($key2 == $key)
								@foreach($unit as $key3 => $unidad)																
									{{ $unidad->unidad }}
							
								@endforeach
							@endif
						@endforeach
						</span>
					</div>
					</td>
				
					<td>
						<a class=" btn btn-danger btn-sm center">
							<span class="glyphicon glyphicon-remove
							glyphicon "></span>
						</a>
					</td>
					
				</tr>
					@endforeach

				@endif


			</tbody>
		</table>
	
	<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-12">

		<center>	
		 	<button class="btn btn-success center-blok btn-sm" title="Guardar orden">
				<span class="fa fa-save fa-2x"></span>
			</button>
		</center>
	</div>
</div>{!! Form::close() !!}