
<div class="col-md-10">
				<br>
					<p class="bold">Lista de ingredientes agregados ---</p>
			
					<table class="table table-hover table-bordered">
						<thead>
							<th>#</th>
							<th>Ingrediente</th>
							<th>Cantidad</th>
							<th>Unidad</th>
							<th>Descartar</th>
						</thead>
					
						<tbody id="lista_agregados">
							@foreach($_SESSION['ingredientes'] as $k => $ingredient)
							<tr>
								<td>{{ $ingredient['id'] }}</td>
								<td>{{ $ingredient['ingrediente'] }}</td>
								<td>{{ $ingredient['cantidad'] }}</td>
								<td>{{ $ingredient['unidad']  }} </td>
								
								<td>
									<button class="btn btn-danger">
										<span>X</span>
									</button>
								</td>
							</tr>		
							@endforeach
						</tbody>
					</table>
				</div>