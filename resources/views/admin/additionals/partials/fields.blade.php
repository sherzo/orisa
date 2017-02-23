<div class="col-lg-12">
	<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
		{!! Form::label('nombre', 'Nombre') !!} <span class="text-danger">*</span>
		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ejm: Sanción disiplinaria', 'title' => 'Introduzca el nombre de la deducción o asignación']) !!}

		@if ($errors->has('nombre'))
            <span class="help-block">
                <em><small>{{ $errors->first('nombre') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
		{!! Form::label('modo_pago', 'Modo de pago') !!} <span class="text-danger">*</span>
		{!! Form::select('modo_pago', ['D' => 'DÍA', 'P' => 'PORCENTAJE', 'V' => 'VALOR'] , null, ['class' => 'form-control', 'placeholder' => 'SELECCIONE', 'title' => 'Introduzca el modo de pago para la deducción o asignación', 'id' => 'modo', 'required' => 'required']) !!}

		@if ($errors->has('nombre'))
            <span class="help-block">
                <em><small>{{ $errors->first('nombre') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }} dia" style="display:none">
		{!! Form::label('valor', 'Valor') !!} <span class="text-danger">*</span>
		{!! Form::number('valor', null, ['class' => 'form-control', 'placeholder' => '300.00', 'title' => 'Introduzca el valor de la deducción o asignación', 'id' => 'valor', 'disabled' => 'disabled']) !!}

		@if ($errors->has('valor'))
            <span class="help-block">
                <em><small>{{ $errors->first('valor') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }} porcentaje" style="display:none">
		{!! Form::label('valor', 'Valor') !!} <span class="text-danger">*</span>
		{!! Form::number('valor', null, ['class' => 'form-control', 'placeholder' => '5%', 'title' => 'Introduzca el valor de la deducción o asignación', 'id' => 'valor2', 'step' => 'any', 'disabled' => 'disabled']) !!}

		@if ($errors->has('valor'))
            <span class="help-block">
                <em><small>{{ $errors->first('valor') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }} valor" style="display:none">
		{!! Form::label('valor', 'Valor') !!} <span class="text-danger">*</span>
		{!! Form::number('valor', null, ['class' => 'form-control', 'placeholder' => '300.00', 'title' => 'Introduzca el valor de la deducción o asignación', 'id' => 'valor3', 'disabled' => 'disabled']) !!}

		@if ($errors->has('valor'))
            <span class="help-block">
                <em><small>{{ $errors->first('valor') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
		{!! Form::label('tipo', 'Caractegoría') !!} <span class="text-danger">*</span>
		{!! Form::select('tipo', ['A' => 'ASIGNACIÓN', 'D' => 'DEDUCCIÓN'] , null, ['class' => 'form-control', 'placeholder' => 'SELECCIONE', 'title' => 'Seleccione la categoría si es deducción o asignación']) !!}

		@if ($errors->has('tipo'))
            <span class="help-block">
                <em><small>{{ $errors->first('tipo') }}</small></em>
           	</span>
        @endif
	</div>
	<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
		{!! Form::label('descripcion', 'Descripción') !!} <span class="text-danger">*</span>
		{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '5', 'placeholder' => 'Ejm: Le falto el respeto al personal', 'title' => 'Descripción']) !!}

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