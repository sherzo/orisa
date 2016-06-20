<br>
	
<div class="panel panel-default">
	<div class="panel-heading">Ingredientes del plato</div>


		<div class="panel-body">
			
			<div class="row">
				<div class="col-md-10">
				@include('flash::message')
					<p class="text-muted">Busque y agregue los ingrediente del plato</p>
				</div>
			</div>
			
			<div class="row">	
				<div class="col-md-4">
					
					{!! Form::open(['route' => 'admin.platos.create', 'method' => 'GET']) !!}

					<div class="input-group">
					
						{!! Form::text('ingrediente_nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrediente', 'title' => 'Busque ingrediente']) !!}
							
						<span class="input-group-btn">
        					<button class="btn btn-default" type="submit" title="Buscar">
								<span class="glyphicon glyphicon-search"></span>
        					</button>
      					</span>
					</div>
   					
   					{!! Form::close() !!}
   				</div>
			</div>

			<br>
			<div class="row">
				<div class="col-md-6">
					<table class="table">
						<thead>
							<th>#</th>
							<th>Ingrediente</th>
							<th>Cantidad</th>
							<th>Unidad</th>
							<th>Agregar</th>
						</thead>

						@if(isset($ingredient))
						<tbody>
							<tr>
								<td>
									{{ $ingredient->id }}
									<input type="hidden" id="id" name="id_ingredient" value="{{ $ingredient->id }}">
								</td>

								<td>
									{{ $ingredient->nombre_ingrediente }}
								</td>

								<td>
									{!! Form::text('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'ingrese la cantidad', 'size' => '1', 'id' => 'cantidad']) !!}
								</td>

								<td>
									{!! Form::select('id_unit', $units, null, ['class' => 'form-control', 'id' => 'unidad']); !!}
								</td>

								<td>
									<a href="#" class="btn btn-success btn-sm btn-agregar" title="Agregar a la lista">
										<span class="fa fa-plus"></span>
									</a>
								</td>
							</tr>	
						</tbody>
						@endif
					</table>
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-md-10"><br>
					<p class="bold">Lista de ingredientes agregados</p>
			
					<table class="table table-hover table-bordered">
						<thead>
							<th>#</th>
							<th>Ingrediente</th>
							<th>Cantidad</th>
							<th>Unidad</th>
							<th>Descartar</th>
						</thead>
					
						<tbody id="lista_agregados">
						
						</tbody>
					</table>
				</div>
			</div>
				
		</div><!-- FIN PANEL BODY -->
</div><!-- FIN PANEL -->