<div class="row">

	<div class="col-md-8 col-md-offset-2">
	<p class=""><strong>Lista de productos agregador a la compra</strong></p>
		<table class="table table-bordered">
			<thead>
				<th>#</th>
				<th>Ingredient</th>
				<th>Cantidad</th>
				<th>Unidad</th>
			</thead>
				
			<tbody>
				@if($data_ingredient)

					@foreach($data_ingredient as $ingredient)
				<tr>
				<td>{{$ingredient->id}}</td>
					<td>{{ $ingredient->nombre_ingrediente }}</td>
					<td>
						<input type="text" class="form-control" placeholder="cantidad">
					</td>
					<td>
						<select name="id" id="" class="form-control">
							
						</select>
					</td>
					
				</tr>
					@endforeach

				@endif
			</tbody>
		</table>
	</div>
</div>