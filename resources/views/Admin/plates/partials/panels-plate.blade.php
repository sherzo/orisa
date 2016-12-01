<br>
	<div class="panel panel-default">
		<div class="panel-heading">Datos iniciales</div>
			<div class="panel-body">


				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
     		 			<img src="../../img/ingresar.jpg" alt="..." id="img_prev">
    				</a>
  				</div>

				<div class="form-group">

					{!! Form::label('image', 'Imagen del plato') !!}

					<input type="file" name="image" onchange="readURL(this)">
				</div>
					<br><br><br><br><br>
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					{!! Form::label('plato', 'Nombre del plato') !!}

					{!! Form::text('plato', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: Ajiaco', 'title' => 'Ingrese su nombre']) !!}
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
	<div class="form-group tooltip-demo text-center">
		<button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
		<button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
	    <br>
	</div>
</div>

	</div>
</div>
