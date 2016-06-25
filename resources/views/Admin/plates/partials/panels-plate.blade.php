<br>
	<div class="panel panel-default">
		<div class="panel-heading">Datos iniciales</div>
			<div class="panel-body">

				{!! Form::open(['route' => 'admin.platos.store', 'method' => 'POST']) !!}
			
				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
     		 			<img src="../../img/ingresar.jpg" alt="...">
    				</a>
  				</div>

				<div class="form-group">
				
					{!! Form::label('name', 'Imagen del plato') !!}

					{!!  Form::file('image'); !!}
				</div>
					<br><br><br><br><br><br><br>
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					{!! Form::label('nombre_plato', 'Nombre del plato') !!}

					{!! Form::text('nombre_plato', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: Ajiaco', 'title' => 'Ingrese su nombre']) !!}
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="form-group">	
					{!! Form::label('precio', 'Precio') !!}

					<div class="input-group">
						<span class="input-group-addon">Bs.</span>

						{!! Form::text('precio', null, ['class' => 'form-control', 'placeholder' => '3200', 'title' => 'Ingrese su nombre']) !!}

						<span class="input-group-addon">.00</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>