<div class="col-lg-12">
	<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
		{!! Form::label('nombre', 'Nombre') !!} 
		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Bono', 'title' => 'Introduzca el nombre de la asignación']) !!}

		@if ($errors->has('nombre'))
            <span class="help-block">
                <em><small>{{ $errors->first('nombre') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
		{!! Form::label('valor', 'Valor') !!} 
		{!! Form::text('valor', null, ['class' => 'form-control', 'placeholder' => '300.00', 'title' => 'Introduzca el valor de la asignación en Bs.F']) !!}

		@if ($errors->has('valor'))
            <span class="help-block">
                <em><small>{{ $errors->first('valor') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
		{!! Form::label('descripcion', 'Descripción') !!} 
		{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '5', 'placeholder' => '', 'title' => 'Descripción ']) !!}

		@if ($errors->has('descripcion'))
            <span class="help-block">
                <em><small>{{ $errors->first('descripcion') }}</small></em>
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