<div class="col-md-6 center-block">
<p class="center-block">Lista de productos</p>

	<table class="table table-bordered">
	{!! Form::open(['route' => 'admin.compra.index', 'method' => 'GET']) !!}
		<thead><tr>
			<th>Agregar</th>
			<th>Producto</th>
			</tr>
		</thead>
		<tbody>
		
			@foreach($ingredients as $ingredient)
			<tr>
				<td>
					{!! Form::checkbox('add_ingrediets[]', $ingredient->id) !!}
				</td>
				<td>{{ $ingredient->nombre_ingrediente }}</td>
			</tr>
			@endforeach			
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2">
					<button class="btn btn-success btn-block"  title="Agregar a la compra">Agregar a la compra</button>
				</td>
			</tr>
		</tfoot>
		{!! Form::close() !!}
	</table>


</div>
