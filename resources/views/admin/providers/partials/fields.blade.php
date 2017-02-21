<div class="col-md-12 text-center">
	<small><strong>Nota:</strong> Los campos marcados con (<span class="text-danger">*</span>) son obligatorios</small>
</div>
<div class="col-lg-6">
	@if($rif)
		<div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
			{!! Form::label('rif', 'RIF') !!}   
			{!! Form::text('rif', $rif, ['class' => 'form-control', 'title' => 'Número de RIF', 'disabled']) !!}
			{!! Form::hidden('rif', $rif) !!}

			@if ($errors->has('rif'))
	            <span class="help-block">
	                <small>{{ $errors->first('rif') }}</small>
	           	</span>
	        @endif
		</div>
	@else
		<div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
			{!! Form::label('rif', 'RIF') !!}   
			{!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Número de RIF', 'disabled']) !!}

			@if ($errors->has('rif'))
	            <span class="help-block">
	                <small>{{ $errors->first('rif') }}</small>
	           	</span>
	        @endif
		</div>
	@endif
</div>
<div class="col-lg-12">
<hr>	
</div>
<div class="col-lg-12">
	<div class="form-group{{ $errors->has('razon_social') ? ' has-error' : '' }}">
		{!! Form::label('razon_social', 'Nombre') !!} 
		{!! Form::text('razon_social', null, ['class' => 'form-control', 'placeholder' => 'Ej. Alimentos Polar Comercial, C.A', 'title' => 'Introduzca su nombre o razón social']) !!}

		@if ($errors->has('razon_social'))
            <span class="help-block">
                <em><small>{{ $errors->first('razon_social') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group">
		{!! Form::label('telefono', 'Teléfono') !!}
		<div class="form-inline{{ $errors->has('telefono') ? ' has-error' : '' }}">	
			{!! Form::select('operadora', array('0412' => '0412', '0424' => '0424', '0416' => '0416', '0414' => '0414', '0426' => '0426'), null, ['class' => 'form-control']) !!}
			{!! Form::text('telefono', null, ['class' => 'form-control awesome', 'placeholder' => 'Ej. 4968557', 'size' => '53', 'title' => 'Introduzca su número de teléfono']) !!}
		
			@if ($errors->has('telefono'))
	            <span class="help-block">
	                <em><small>{{ $errors->first('telefono') }}</small></em>
	           	</span>
	        @endif	

        </div>			
	</div>
	<div class="form-group has-feedback"> 
		{!! Form::label('correo', 'E-mail') !!}
		{!! Form::text('correo', null, ['class' => 'form-control correo', 'placeholder' => 'Ej. ejemplo@mail.com', 'title' => 'Introduzca su correo electrónico']) !!}

		
            <span class="help-block">
                <em><small></small></em>
           	</span>
       
	</div>
	<p><strong>Datos de dirección</strong><hr></p>
	<div class="form-group has-feedback ">

		
		{!! Form::label('cuidad', 'Cuidad') !!} 
		{!! Form::text('cuidad', null, ['class' => 'form-control requerido', 'placeholder' => 'Ej. Cagua', 'title' => 'Introduzca la cuidad']) !!}

		
            <span class="help-block">
                <em><small></small></em>
           	</span>
        
	</div>
	<div class="form-group has-feedback ">
		
		{!! Form::label('Av. C/', 'calle') !!} 
		{!! Form::text('calle', null, ['class' => 'form-control requerido', 'placeholder' => 'Ej. Calle 5 de marzo', 'title' => 'Introduzca la calle o avenida']) !!}

		
            <span class="help-block">
                <em><small></small></em>
           	</span>
        
	</div>

	<div class="form-group has-feedback ">
		
		{!! Form::label('habitacion', 'Numero de oficina, parcela o galpón') !!}

		{!! Form::text('habitacion', null, ['class' => 'form-control requerido', 'placeholder' => 'Ej. 08-04', 'title' => 'Introduzca el numero de habitación']) !!}

		
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