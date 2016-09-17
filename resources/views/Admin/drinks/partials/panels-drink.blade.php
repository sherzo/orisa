<br>
	<div class="panel panel-default">
		<div class="panel-heading">Datos iniciales</div>
			<div class="panel-body">

			
				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
     		 			<img src="../../img/ingresar.jpg" alt="...">
    				</a>
  				</div>

				<div class="form-group">
				
					{!! Form::label('image', 'Imagen de la bebida') !!}

					{!!  Form::file('image'); !!}
				</div>
					<br><br><br><br><br>
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					{!! Form::label('bebida', 'Nombre de la bebida') !!}

					{!! Form::text('bebida', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: Mojito', 'title' => 'Ingrese su nombre']) !!}
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
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('descripcion', 'Descipción') !!}	

					{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}	

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12"><br>
				<center>
					<button class="btn btn-primary btn-sm" title="Borrar">
						<span class="fa fa-refresh fa-2x"></span>
					</button>
					<button id="registrar" class="btn btn-success btn-sm" title="Guardar">
						<span class="fa fa-save fa-2x"></span>
					</button>
                </center>
			</div>
		</div>

	</div>
</div>