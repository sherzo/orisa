@if($providers)
    <div class="form-group{{ $errors->has('id_providers') ? ' has-error' : '' }}">
    	{!! Form::label('id_providers', 'Proveedores') !!} <small class="text-danger">*</small>
    	{!! Form::select('id_providers[]', $providers, null, ['class' => 'form-control select-providers form-control', 'multiple']) !!}

        @if ($errors->has('id_providers'))
            <span class="help-block">
                <em><small>{{ $errors->first('id_providers') }}</small></em>
            </span>
        @endif
    </div>
    <hr>
@endif

<div class="form-group{{ $errors->has('bebida') ? ' has-error' : '' }}">
	{!! Form::label('bebida', 'Nombre') !!} <small class="text-danger">*</small>
	{!! Form::text('bebida', null, ['class' => 'form-control', 'placeholder' => 'Yukery', 'title' => 'Ingrese el nombre de la bebida']) !!}

	@if ($errors->has('bebida'))
        <span class="help-block">
            <em><small>{{ $errors->first('bebida') }}</small></em>
    	</span>
    @endif
</div>
<div class="form-group{{ $errors->has('id_unit') ? ' has-error' : '' }}">
	{!! Form::label('id_unit', 'Unidad de medida') !!} <small class="text-danger">*</small>
	{!! Form::select('id_unit', $units, null, ['placeholder' => 'Seleccione', 'class' => 'form-control']) !!}

	@if ($errors->has('id_unit'))
        <span class="help-block">
            <em><small>{{ $errors->first('id_unit') }}</small></em>
    	</span>
    @endif
</div>
<div class="form-group{{ $errors->has('caracteristica') ? ' has-error' : '' }}">
	{!! Form::label('caracteristica', 'Característica') !!} <small class="text-danger">*</small>
    {!! Form::text('caracteristica', null, ['class' => 'form-control', 'placeholder' => 'Jugos Yuky-Pak', 'title' => 'Introduzca una característica del producto']) !!} 

    @if ($errors->has('caracteristica'))
        <span class="help-block">
            <em><small>{{ $errors->first('caracteristica') }}</small></em>
    	</span>
    @endif 
</div>
<br>
<div class="form-group tooltip-demo text-center">
	<button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
	<button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
	<br>
</div> 