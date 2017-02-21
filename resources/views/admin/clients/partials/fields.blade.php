<div class="col-md-12 text-center">
	<small class="text-center"><strong>Nota:</strong> Los campos marcados con (<span class="text-danger">*</span>) son obligatorios
</div>
</small>
<div class="col-lg-6">
	@if($dni_cedula)

		@if(isset($comanda))
			<input type="hidden" name="comanda" value="{{ $comanda }}">
		@endif
		<div class="form-group">
			{!! Form::label('cedula', 'Cédula o Rif') !!}
			{!! Form::text('cedula', $dni_cedula, ['class' => 'form-control', 'title' => 'Número de cedula', 'disabled']) !!}
			{!! Form::hidden('dni_cedula', $dni_cedula) !!}

			@if ($errors->has('cedula'))
	            <span class="help-block">
	                <small>{{ $errors->first('cedula') }}</small>
	           	</span>
	        @endif
		</div>
	@else
		<div class="form-group has-feedback">
			{!! Form::label('cedula', 'Cédula') !!}
			{!! Form::text('dni_cedula', null, ['class' => 'form-control', 'title' => 'Número de cedula', 'disabled']) !!}


	            <span class="help-block">
	                <small></small>
	           	</span>
		</div>
	@endif
</div>
<div class="col-lg-12">
<hr>
</div>
<div class="col-lg-12">

	<div class="form-group has-feedback">
		{!! Form::label('nombre', 'Nombre o Razon social',['class' => 'control-label']) !!} <small class="text-danger">*</small>
		{!! Form::text('nombre', null, ['class' => 'form-control nombre requerido', 'placeholder' => 'Ej. Alfredo Jesús', 'title' => 'Introduzca su nombre']) !!}


            <span class="help-block">
                <em><small></small></em>
           	</span>

	</div>
	<div class="form-group has-feedback">
		{!! Form::label('telefono', 'Teléfono') !!} <small class="text-danger">*</small>
		<div class="form-inline has-feedback form-group">
			{!! Form::select('operadora', array('0412' => '0412', '0424' => '0424', '0416' => '0416', '0414' => '0414', '0426' => '0426'), null, ['class' => 'form-control']) !!}

			{!! Form::number('telefono', null, [ 'maxlength' => '7', 'class' => 'form-control telefono awesome requerido', 'placeholder' => 'Ej. 4968557', 'size' => '53', 'title' => 'Introduzca su número de teléfono']) !!}


	            <span class="help-block">
	                <em><small></small></em>
	           	</span>


        </div>
	</div>
	<div class="form-group has-feedback">
		{!! Form::label('correo', 'E-mail') !!} <small class="text-danger">*</small>
		{!! Form::text('correo', null, ['class' => 'form-control requerido correo', 'placeholder' => 'Ej. nombre@mail.com', 'title' => 'Introduzca su correo electrónico']) !!}
            <span class="help-block">
                <em><small></small></em>
           	</span>

	</div>

	<p><strong>Datos de dirección</strong><hr></p>
	<div class="form-group has-feedback ">

		
		{!! Form::label('cuidad', 'Cuidad') !!} <small class="text-danger">*</small>
		{!! Form::text('cuidad', null, ['class' => 'form-control requerido', 'placeholder' => 'Ej. Cagua', 'title' => 'Ingrese la cuidad de dirección']) !!}

		
            <span class="help-block">
                <em><small></small></em>
           	</span>
        
	</div>
	<div class="form-group has-feedback ">
		
		{!! Form::label('Av. C/', 'Av. C/') !!} <small class="text-danger">*</small>
		{!! Form::text('calle', null, ['class' => 'form-control requerido', 'placeholder' => 'Ej. Calle 5 de marzo', 'title' => 'Ingrese la calle o avenida']) !!}

		
            <span class="help-block">
                <em><small></small></em>
           	</span>
        
	</div>

	<div class="form-group has-feedback ">
		
		{!! Form::label('habitacion', 'Numero de casa, apartamento') !!} <small class="text-danger">*</small>
		{!! Form::text('habitacion', null, ['class' => 'form-control requerido', 'placeholder' => 'Ej. Apartamento 08-04', 'title' => 'Ingrese el numero de habitación']) !!}

		
            <span class="help-block">
                <em><small></small></em>
           	</span>
        
	</div>

	<br>
	<div class="form-group tooltip-demo text-center">
		<button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
		<button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
	    <br>
	</div>
</div>
