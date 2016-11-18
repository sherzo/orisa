<div class="col-lg-6">
	@if($dni_cedula)

		@if(isset($comanda))
			<input type="hidden" name="comanda" value="{{ $comanda }}">
		@endif
		<div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
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
		<div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
			{!! Form::label('cedula', 'Cédula') !!}   
			{!! Form::text('dni_cedula', null, ['class' => 'form-control', 'title' => 'Número de cedula', 'disabled']) !!}

			@if ($errors->has('cedula'))
	            <span class="help-block">
	                <small>{{ $errors->first('cedula') }}</small>
	           	</span>
	        @endif
		</div>
	@endif
</div>
<div class="col-lg-12">
<hr>	
</div>
<div class="col-lg-12">
	<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
		{!! Form::label('nombre', 'Nombre o Razon social') !!} 
		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Alfredo Jesús', 'title' => 'Introduzca su nombre']) !!}

		@if ($errors->has('nombre'))
            <span class="help-block">
                <em><small>{{ $errors->first('nombre') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group">
		{!! Form::label('telefono', 'Teléfono') !!}
		<div class="form-inline{{ $errors->has('telefono') ? ' has-error' : '' }}">	
			{!! Form::select('operadora', array('0412' => '0412', '0424' => '0424', '0416' => '0416', '0414' => '0414', '0426' => '0426'), null, ['class' => 'form-control']) !!}
			{!! Form::text('telefono', null, ['class' => 'form-control awesome', 'placeholder' => '4968557', 'size' => '53', 'title' => 'Introduzca su número de teléfono']) !!}
		
			@if ($errors->has('telefono'))
	            <span class="help-block">
	                <em><small>{{ $errors->first('telefono') }}</small></em>
	           	</span>
	        @endif	

        </div>			
	</div>
	<div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}"> 
		{!! Form::label('correo', 'E-mail') !!}
		{!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'title' => 'Introduzca su correo electrónico']) !!}

		@if ($errors->has('correo'))
            <span class="help-block">
                <em><small>{{ $errors->first('correo') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
		{!! Form::label('direccion', 'Dirección') !!} 
		{!! Form::textarea('direccion', null, ['class' => 'form-control', 'rows' => '5', 'placeholder' => '6362 Bahringer Fork South Asa, WY 42384', 'title' => 'Dirección fiscal']) !!}

		@if ($errors->has('direccion'))
            <span class="help-block">
                <em><small>{{ $errors->first('direccion') }}</small></em>
           	</span>
        @endif
	</div>
	<br>
	<div class="form-group tooltip-demo text-center">
		<button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
		<button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
	    <br>
	</div> 
</div>