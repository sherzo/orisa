<tbody>
	
	@foreach($ingredients as $ingredient)
		<tr>
			<td>{{$ingredient->id}}</td>
			<td>{{$ingredient->nombre_ingrediente}}</td>
			<td>
				<input type="text" class="form-control" name="cantidad[]">
			</td>
			<td>{{ $ingredient->id_unit}}</td>
			<td>
				<button class="btn btn-success btn-sm">
					<span class="fa fa-plus"></span>
				</button>
			</td>
		</tr>
	@endforeach	
</tbody>
