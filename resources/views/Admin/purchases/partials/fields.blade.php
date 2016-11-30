{!! Form::open(['route' => 'admin.compra.create', 'method' => 'GET']) !!}
	<div class="col-lg-12">
		<div class="form-group">
			<div class="input-group">
				<div class="form-group">
					{!! Form::select('proveedor', $providers, null, ['class' => 'form-control']) !!}
				</div>
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default" type="button" id="buscar" title="Buscar productos">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			 </div>
		</div>
	</div>
{!! Form::close() !!}

<div class="col-md-3"></div>

@if($ingredients)

{!! Form::open(['route' => 'admin.compra.create', 'method' => 'GET']) !!}
	<div class="row">
		<div class="col-md-6 center-block">
			<h3>Productos</h3>
			<p class="text-muted">Seleccione</p>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Añadir</th>
						<th>Ingredientes</th>
					</tr>
				</thead>
				<tbody>
				<input type="hidden" name="id_proveedor" value="{{ $id_proveedor }}">

					@if(count($ingredients) == '0')
						<tr>
							<td class="text-center" colspan="2">
								<em>No se ha encontrado ningún resultado</em>
							</td>
						</tr>		
					@else

						@foreach($ingredients as $ingredient)
						<tr>
							<td>
								{!! Form::checkbox('add_ingredients[]', $ingredient->id) !!}
							</td>
							<td>{{ $ingredient->ingrediente }}</td>
						</tr>		
						@endforeach

					@endif

					@if(!empty($liqueurs))
				
					<tr>
						<td><strong>Añadir</strong></td>
						<td><strong>Licores</strong></td>
					
					</tr>

					@endif

					@if(count($liqueurs) == '0')
						<tr>
							<td class="text-center" colspan="2">
								<em>No se ha encontrado ningún resultado</em>
							</td>
						</tr>
					@else

						@foreach($liqueurs as $liqueur)
						<tr>
							<td>
								{!! Form::checkbox('add_liqueurs[]', $liqueur->id) !!}
							</td>
							<td>{{ $liqueur->licor }}</td>
						</tr>
						@endforeach	

					@endif

					@if(!empty($drinks))
				
					<tr>
						<td><strong>Añadir</strong></td>
						<td><strong>Bebidas</strong></td>
					
					</tr>

					@endif

					@if(count($drinks) == '0')
						<tr>
							<td class="text-center" colspan="2">
								<em>No se ha encontrado ningún resultado</em>
							</td>
						</tr>
					@else

						@foreach($drinks as $drink)
						<tr>
							<td>
								{!! Form::checkbox('add_drinks[]', $drink->id) !!}
							</td>
							<td>{{ $drink->bebida }}</td>
						</tr>
						@endforeach	

					@endif

				</tbody>
				<tfoot>
					<tr>
						<td colspan="2">
							<button class="btn btn-success btn-block"  title="Añadir productos a la orden."><span class="fa fa-plus "></span></button>
						</td>
					</tr>
				</tfoot>

			</table>
		</div>
	</div>

{!! Form::close() !!}
			
@endif

@if($data_ingredient || $data_liqueur || $data_drink)

{!! Form::open(['route' => 'admin.compra.store', 'method' => 'POST']) !!} {{ csrf_field() }}

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
			<input type="hidden" name="id_proveedor" value="{{ $id_proveedor }}">
				@if($data_ingredient)

					@foreach($data_ingredient as $key => $ingredient)
				<tr>
				<td>
				{{$ingredient->id}}
					
					<input type="hidden" name="ingredients[]" value="{{ $ingredient->id }}">
				</td>
					<td>{{ $ingredient->ingrediente }}</td>
					<td>
					<div class="input-group">
		
						{!! Form::number('cantidad_ingredient[]', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad del ingrediente para la orden', 'required' => 'required']) !!}

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

				@if($data_liqueur)

					@foreach($data_liqueur as $key => $liqueur)
				<tr>
				<td>
				{{$liqueur->id}}
					
					<input type="hidden" name="liqueurs[]" value="{{ $liqueur->id }}">
				</td>
					<td>{{ $liqueur->licor }}</td>
					<td>
					<div class="input-group">
		
						{!! Form::number('cantidad_liqueur[]', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad del licor para la orden', 'required' => 'required']) !!}

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

				@if($data_drink)

					@foreach($data_drink as $key => $drink)
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
				
									{!! Form::number('cantidad_drink[]', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad del licor para la orden', 'required' => 'required']) !!}
									<span class="input-group-addon">
										@foreach($units_d as $key2 => $unit)
											@if($key2 == $key)
												@foreach($unit as $key3 => $unidad)		

													{{ $unidad->unidad }}

												@endforeach
											@endif
										@endforeach
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

@endif