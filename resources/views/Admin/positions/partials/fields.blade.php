<div class="col-lg-4">
    <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
        {!! Form::label('codigo', 'Codigo') !!} <small class="text-danger">*</small>
        {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'T64945-8874', 'title' => 'Introduzca el codigo del cargo']) !!}

        @if ($errors->has('codigo'))
            <span class="help-block">
                <em><small>{{ $errors->first('codigo') }}</small></em>
            </span>
        @endif
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}"> 
        {!! Form::label('nombre', 'Nombre') !!} <small class="text-danger">*</small>
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Chef', 'title' => 'Introduzca su nombre']) !!}

        @if ($errors->has('nombre'))
            <span class="help-block">
                <em><small>{{ $errors->first('nombre') }}</small></em>
            </span>
        @endif
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group{{ $errors->has('salario') ? ' has-error' : '' }}"> 
        {!! Form::label('salario', 'Salario') !!} <small class="text-danger">*</small>
        {!! Form::text('salario', null, ['class' => 'form-control', 'placeholder' => '15000', 'title' => 'Introduzca su sueldo minimo']) !!}

        @if ($errors->has('salario'))
            <span class="help-block">
                <em><small>{{ $errors->first('salario') }}</small></em>
            </span>
        @endif
    </div>
</div>
<div class="col-lg-12">
    <hr>
    <div class="form-group tooltip-demo text-center">
        <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
        <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
        <br>
    </div> 
</div>
