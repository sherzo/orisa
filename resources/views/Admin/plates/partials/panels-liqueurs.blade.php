<br>
	<div class="panel panel-default">

		<div class="panel-heading">Licores del plato</div>
			<div class="panel-body">
			<div class="row">
				<div class="col-md-10">
					<p>Busque y agregue los licores del plato</p>
				</div>
			</div>
				<div class="row">	
					<div class="col-md-3">
			

					
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrediente', 'title' => 'Busque ingrediente']) !!}

					
      
   				 </div>
			
			<div class="col-md-2">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad', 'disabled']) !!}
			</div>
			<div class="col-md-2">
				<select class="form-control">
					<option>L</option>
					<option>Ml</option>
				</select>
			</div>
			<div class="col-md-2 ">
				<button class="btn btn-success btn-sm pull-right"><span class="fa fa-plus"></span></button>
		</div>
	</div>

	<div class="row"><hr>
		<div class="col-md-10"><br>
		<p class="bold">Lista de licores agregados</p>
			<table class="table table-hover">
				<thead>
				<th>#</th>
				<th>Licor</th>
				<th>Cantidad</th>
				<th>Unidad</th>
				<th>Acción</th>
				</thead>

				<tbody>
				<tr>
				<td>1</td>
					<td>Vino</td>
					<td>
						10

					</td>
					<td>
						ml.
					</td>
					<td>
						<button class="btn btn-danger btn-sm"><span class="fa fa-times"></span></button>
					</td>
				</tr>

				
				</tbody>
			</table>
		</div>
	</div>
				
			</div><!-- FIN PANEL BODY -->
	</div><!-- FIN PANEL -->