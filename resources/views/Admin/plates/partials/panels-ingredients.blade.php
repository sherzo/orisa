
	<br>
<div class="panel panel-default">
	<div class="panel-heading">Ingredientes del plato</div>


		<div class="panel-body">
			
			<div class="row">
				<div class="col-md-10">
				@include('flash::message')
				<div class="alert alert-danger hide" role="alert">
					<strong>Error!</strong> ingrese la cantidad
				</div>
					<p class="text-muted">Busque y agregue los ingrediente del plato</p>
				</div>
			</div>
			
			<div class="row">	
				<div class="col-md-4">
					
					{!! Form::open(['route' => 'admin.platos.create', 'method' => 'GET']) !!}

					<div class="input-group">
					
						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrediente', 'title' => 'Busque ingrediente']) !!}
							
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
				<div class="col-md-10">
					<table class="table">
						<thead>
							<th>#</th>
							<th>Ingrediente</th>
							<th>Cantidad</th>
							<th>Unidad</th>
							<th>Agregar</th>
						</thead>

					@include('admin.plates.partials.sub-partials.table')
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
						

						<tbody id="list_ingredient">
							
						</tbody>
					</table>
				</div>
			</div>
				
		</div><!-- FIN PANEL BODY -->
</div><!-- FIN PANEL -->