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
					<br><br><br><br><br><br>		
				<div class="form-group">
					{!! Form::label('name', 'Nombre del plato') !!}

					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: Ajiaco', 'title' => 'Ingrese su nombre']) !!}
				</div>
			</div>
	</div>