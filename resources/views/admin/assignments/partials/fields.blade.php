<div class="col-lg-12">
	<div class="form-group{{ $errors->has('turno') ? ' has-error' : '' }}">
		{!! Form::label('turno', 'Turno') !!} 
		{!! Form::text('turno', null, ['class' => 'form-control', 'disabled' => 'disabled']) !!}

		@if ($errors->has('turno'))
            <span class="help-block">
                <em><small>{{ $errors->first('turno') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('entrada') ? ' has-error' : '' }}">
		{!! Form::label('entrada', 'Entrada') !!} 
		{!! Form::time('hora_entrada', null, ['class' => 'form-control']) !!}

		@if ($errors->has('entrada'))
            <span class="help-block">
                <em><small>{{ $errors->first('entrada') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('salida') ? ' has-error' : '' }}">
		{!! Form::label('salida', 'Salida') !!} 
		{!! Form::time('hora_salida', null, ['class' => 'form-control']) !!}

		@if ($errors->has('salida'))
            <span class="help-block">
                <em><small>{{ $errors->first('salida') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group tooltip-demo text-center">
		<button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
		<button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
	    <br>
	</div> 
</div>