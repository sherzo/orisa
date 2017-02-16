<div class="col-lg-6">
	@if($dni_cedula)

		@if(isset($comanda))
			<input type="hidden" name="comanda" value="{{ $comanda }}">
		@endif
		<div class="form-group">
			{!! Form::label('cedula', 'Cédula') !!}
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
	                <small class="msj">Ayuda para el usuarip</small>
	           	</span>
		</div>
	@endif
</div>
<div class="col-lg-12">
<hr>
</div>
<div class="col-lg-12">

	<div class="form-group has-feedback">
		{!! Form::label('nombre', 'Nombre o Razon social',['class' => 'control-label']) !!}
		{!! Form::text('nombre', null, ['class' => 'form-control nombre requerido', 'placeholder' => 'Ej. Alfredo Jesús', 'title' => 'Introduzca su nombre']) !!}


            <span class="help-block">
                <em><small></small></em>
           	</span>

	</div>
	<div class="form-group has-feedback">
		{!! Form::label('telefono', 'Teléfono') !!}
		<div class="form-inline has-feedback form-group">
			{!! Form::select('operadora', array('0412' => '0412', '0424' => '0424', '0416' => '0416', '0414' => '0414', '0426' => '0426'), null, ['class' => 'form-control']) !!}

			{!! Form::number('telefono', null, [ 'maxlength' => '7', 'class' => 'form-control telefono awesome requerido', 'placeholder' => 'Ej. 4968557', 'size' => '53', 'title' => 'Introduzca su número de teléfono']) !!}


	            <span class="help-block">
	                <em><small></small></em>
	           	</span>


        </div>
	</div>
	<div class="form-group has-feedback">
		{!! Form::label('correo', 'E-mail') !!}
		{!! Form::text('correo', null, ['class' => 'form-control requerido correo', 'placeholder' => 'ejemplo@gmail.com', 'title' => 'Introduzca su correo electrónico']) !!}
            <span class="help-block">
                <em><small></small></em>
           	</span>

	</div>
	<div class="form-group has-feedback">
		{!! Form::label('direccion', 'Dirección') !!}
		{!! Form::textarea('direccion', null, ['class' => 'form-control requerido', 'rows' => '5', 'placeholder' => '6362 Bahringer Fork South Asa, WY 42384', 'title' => 'Dirección fiscal']) !!}


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
