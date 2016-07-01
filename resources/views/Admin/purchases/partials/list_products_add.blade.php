	{!! Form::open(['route' => 'admin.compra.store', 'method' => 'POST']) !!}

<div class="row">

	<div class="col-md-8 col-md-offset-2">
	<h4>Productros agregados</h4>
	<p class="text-muted">Ingrese cantidades</p>
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Ingredient</th>
				<th>Cantidad</th>
				<th>Remover</th>
			</thead>
				
			<tbody>
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
		
						{!! Form::text('cantidad[]', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad del ingrediente para la orden']) !!}

						<span class="input-group-addon">
						@foreach($units as $key2 => $unit)
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
	
	
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<center>	
		 	<button class="btn btn-success center-blok btn-sm">
				<span class="fa fa-save fa-2x"></span>
			</button>
		</center>
	</div>
</div>{!! Form::close() !!}