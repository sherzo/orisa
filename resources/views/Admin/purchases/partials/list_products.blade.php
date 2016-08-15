
<div class="col-md-6 center-block">

<h3>Lista de productos</h3>
	<p class="text-muted">Selecciones y agregue</p>
	<table class="table table-bordered">
	{!! Form::open(['route' => 'admin.compra.index', 'method' => 'GET']) !!}
		<thead><tr>
			<th>Agregar</th>
			<th>Ingrediente</th>
			</tr>
		</thead>
		<tbody>
		<input type="text" name="id_proveedor" value="{{ $id_proveedor }}">
		
			@foreach($ingredients as $ingredient)
			<tr>
				<td>
					{!! Form::checkbox('add_ingredients[]', $ingredient->id) !!}
				</td>
				<td>{{ $ingredient->ingrediente }}</td>
			</tr>		
			@endforeach

			@if(!empty($liqueurs))
		
			<tr>
				<td><strong>Agregar</strong></td>
				<td><strong>Licor</strong></td>
			
			</tr>
			@endif

			@foreach($liqueurs as $liqueur)
			<tr>
				<td>
					{!! Form::checkbox('add_liqueurs[]', $liqueur->id) !!}
				</td>
				<td>{{ $liqueur->nombre_licor }}</td>
			</tr>
			@endforeach			
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2">
					<button class="btn btn-success btn-block"  title="Agregar a la compra"><span class="fa fa-plus "></span> Agregar a la compra</button>
				</td>
			</tr>
		</tfoot>
		
		{!! Form::close() !!}
	</table>


</div>
