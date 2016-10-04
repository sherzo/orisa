{!! Form::open(['route' => 'admin.compra.save', 'method' => 'POST']) !!} {{ csrf_field() }}

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<hr>
		<h3>Productos</h3>
		<p class="text-muted center-block">Cantidades</p>

		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Producto</th>
					<th>Cantidad</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				@if($ingredients)

					@foreach($ingredients as $key => $ingredient)
				<tr>
				<td>
					{{ $ingredient->id }}
					<input type="hidden" name="id_compra" value="{{ $ingredient->pivot->compra_id }}">
					<input type="hidden" name="ingredients[]" value="{{ $ingredient->id }}">	
				</td>
					<td>{{ $ingredient->ingrediente }}</td>
					<td>
					<div class="input-group">
		
						{!! Form::text('cantidad_ingredient[]', $ingredient->pivot->cantidad, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad del ingrediente para la orden']) !!}

						<span class="input-group-addon">
							{{ $ingredient->unit->unidad }}
						</span>
					</div>
					</td>
				
					<td class="text-center">
						<a class=" btn btn-danger btn-sm center">
							<span class="glyphicon glyphicon-remove
							glyphicon "></span>
						</a>
					</td>
					
				</tr>
					@endforeach

				@endif

	<!-- -------------------------- Lista de licores ----------------------------- -->

				@if($liqueurs)

					@foreach($liqueurs as $key => $liqueur)
				<tr>
				<td>
					{{$liqueur->id}}
					
					<input type="hidden" name="liqueurs[]" value="{{ $liqueur->id }}">
				</td>
					<td>{{ $liqueur->licor }}</td>
					<td>
					<div class="input-group">
		
						{!! Form::text('cantidad_liqueur[]', $liqueur->pivot->cantidad, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad del licor para la orden']) !!}

						<span class="input-group-addon">
							{{ $liqueur->unit->unidad }}
						</span>
					</div>
					</td>
				
					<td class="text-center">
						<a class=" btn btn-danger btn-sm center">
							<span class="glyphicon glyphicon-remove
							glyphicon "></span>
						</a>
					</td>
					
				</tr>
					@endforeach

				@endif

				<!-- -------------------------- Lista de bebidas fabricadas ----------------------------- -->

				@if($drinks)

					@foreach($drinks as $key => $drink)
						<tr>
							<td>
								{{$drink->id}}
								<input type="hidden" name="drinks[]" value="{{ $drink->id }}">
							</td>
							<td>
								{{ $drink->bebida }}
							</td>
							<td>
								<div class="input-group">
				
									{!! Form::text('cantidad_drink[]', $drink->pivot->cantidad, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad del licor para la orden']) !!}
									<span class="input-group-addon">
										{{ $drink->unit->unidad }}
									</span>
								</div>
							</td>
						
							<td class="text-center">
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
		<div class="col-md-10 col-md-offset-1">	
			 <br>
            <div class="form-group tooltip-demo text-center">
                <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
                <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
                <br>
            </div> 
		</div>
	</div>

{!! Form::close() !!}