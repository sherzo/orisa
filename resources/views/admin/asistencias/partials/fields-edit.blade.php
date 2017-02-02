<div class="col-lg-6">
	@if($asistencia)
		<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
			{!! Form::label('nombre', 'Nombre') !!}   
			{!! Form::text('nombre', $asistencia->personal->full_name, ['class' => 'form-control', 'title' => 'Nombre del empleado', 'disabled']) !!}

			@if ($errors->has('nombre'))
	            <span class="help-block">
	                <small>{{ $errors->first('nombre') }}</small>
	           	</span>
	        @endif
		</div>
	@endif
</div>
<div class="col-lg-12">
<hr>	
</div>
<div class="col-lg-6">
	<div class="form-group{{ $errors->has('hora_entrada') ? ' has-error' : '' }}">
		{!! Form::label('entrada', 'Entrada') !!} 
		{!! Form::time('hora_entrada', null, ['class' => 'form-control', 'title' => 'Introduzca la hora de entrada']) !!}

		@if ($errors->has('hora_entrada'))
            <span class="help-block">
                <em><small>{{ $errors->first('hora_entrada') }}</small></em>
           	</span>
        @endif
	</div>
</div>
<div class="col-lg-6">
	<div class="form-group{{ $errors->has('hora_salida') ? ' has-error' : '' }}">
		{!! Form::label('salida', 'Salida') !!} 
		{!! Form::time('hora_salida', null, ['class' => 'form-control', 'title' => 'Introduzca la hora de salida']) !!}

		@if ($errors->has('hora_salida'))
            <span class="help-block">
                <em><small>{{ $errors->first('hora_salida') }}</small></em>
           	</span>
        @endif
	</div>
</div>
<div class="col-lg-12">
	<div class="form-group{{ $errors->has('motivo') ? ' has-error' : '' }}"> 
		{!! Form::label('motivo', 'Motivo') !!}
		{!! Form::text('motivo', null, ['class' => 'form-control', 'placeholder' => 'Enfermo', 'title' => 'Introduzca algún motivo']) !!}

		@if ($errors->has('motivo'))
            <span class="help-block">
                <em><small>{{ $errors->first('motivo') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
		{!! Form::label('justificacion', 'Justificación') !!} 
		{!! Form::textarea('justificacion', null, ['class' => 'form-control', 'rows' => '5', 'placeholder' => '', 'title' => 'Justificación de inasistencia']) !!}

		@if ($errors->has('justificacion'))
            <span class="help-block">
                <em><small>{{ $errors->first('justifiacion') }}</small></em>
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