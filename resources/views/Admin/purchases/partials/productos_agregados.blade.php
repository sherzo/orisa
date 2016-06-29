<div class="col-md-12">
	<table class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Unidad</th>
				<th>Precio</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>harina</td>
				<td>
					<input type="text" name="" class="form-control" placeholder="cantidad">
				</td>
				<td>
					{!! Form::select('type', array('2' => 'Administrador(a)', '3' => 'Encargado(a)', '4' => 'Chef', '5' => 'Cajero(a)', '6' => 'Mesonero(a)', '7' => 'Cliente'), null, ['class' => 'form-control']); !!}
				</td>
				<td>
					<input type="text" name="" class="form-control" placeholder="cantidad">
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>
					Arroz
				</td>
				<td>
					<input type="text" name="" class="form-control" placeholder="cantidad">
				</td>
				
				<td>
					<input type="text" name="" class="form-control" placeholder="cantidad">
				</td>
				<td>
					<input type="text" name="" class="form-control" placeholder="cantidad">
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Azucar</td>
				<td>
					<input type="text" name="" class="form-control" placeholder="cantidad">
				</td>
	
				<td>
					<input type="text" name="" class="form-control">
				</td>
				<td>
					<input type="text" name="" class="form-control" placeholder="cantidad">
				</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Aceite</td>
				<td>
					<input type="text" name="" class="form-control" placeholder="cantidad">
				</td>

				<td>
					<input type="text" name="" class="form-control" placeholder="cantidad">
				</td>
				<td>
					<input type="text" size="1" name="" class="form-control" placeholder="precio">

				</td>
			</tr>
		</tbody>
	</table>
</div>