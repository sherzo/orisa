<div class="col-md-12 text-center">
    <small><strong>Nota:</strong> Los campos marcados con (<span class="text-danger">*</span>) son obligatorios</small>
</div>
@if($dni_cedula)
    <div class="col-lg-4">
        <div class="form-group{{ $errors->has('dni_cedula') ? ' has-error' : '' }}">
            {!! Form::label('document_em', 'Cédula') !!} <small class="text-danger">*</small>
            {!! Form::text('dni_cedula', $dni_cedula, ['class' => 'form-control', 'disabled']) !!}
            {!! Form::hidden('dni_cedula', $dni_cedula) !!}

            @if ($errors->has('dni_cedula'))
                <span class="help-block">
                    <small>{{ $errors->first('dni_cedula') }}</small>
                </span>
            @endif
        </div>
    </div>
@else
    <div class="col-lg-4">
        <div class="form-group{{ $errors->has('dni_cedula') ? ' has-error' : '' }}">
            {!! Form::label('document_em', 'Cédula') !!}
            {!! Form::text('dni_cedula', null, ['class' => 'form-control', 'disabled']) !!}


            @if ($errors->has('dni_cedula'))
                <span class="help-block">
                    <small>{{ $errors->first('dni_cedula') }}</small>
                </span>
            @endif
        </div>
    </div>
@endif
<div class="col-lg-12">
<hr>
</div>
<div class="col-lg-4">
    <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
        {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!} <small class="text-danger">*</small>
        {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}

        @if ($errors->has('fecha_nacimiento'))
            <span class="help-block">
                <small>{{ $errors->first('fecha_nacimiento') }}</small>
            </span>
        @endif
    </div>
    
    <div class="form-group has-feedback">
        {!! Form::label('telefono', 'Teléfono') !!} <small class="text-danger">*</small>
        <div class="form-inline has-feedback form-group">
            {!! Form::select('operadora', array('0412' => '0412', '0424' => '0424', '0416' => '0416', '0414' => '0414', '0426' => '0426'), null, ['class' => 'form-control']) !!}

            {!! Form::text('telefono', null, [ 'maxlength' => '7', 'class' => 'form-control telefono awesome requerido', 'placeholder' => 'Ej. 4968557', 'size' => '11', 'title' => 'Introduzca su número de teléfono']) !!}


                <span class="help-block">
                    <em><small></small></em>
                </span>


        </div>
    </div>

    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
        {!! Form::label('addres_em', 'Dirección') !!} <small class="text-danger">*</small>
        {!! Form::textarea('direccion', null, ['class' => 'form-control', 'rows' => '4']) !!}

        @if ($errors->has('direccion'))
            <span class="help-block">
                <small>{{ $errors->first('direccion') }}</small>
            </span>
        @endif
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
        {!! Form::label('names_em', 'Nombres') !!} <small class="text-danger">*</small>
        {!! Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => 'José Gregorio']) !!}

        @if ($errors->has('nombres'))
            <span class="help-block">
                <small>{{ $errors->first('nombres') }}</small>
            </span>
        @endif
    </div>
    
    <div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">
        {!! Form::label('civil_status_em', 'Estado civil') !!} <small class="text-danger">*</small>
        {!! Form::select('estado_civil', array('' => 'Seleccione', 'Soltero/a' => 'Soltero/a', 'Comprometido/a' => 'Comprometido/a', 'casado/a' => 'Casado/a', 'Divorciado/a' => 'Divorciado/a', 'Viudo/a' => 'Viudo/a'), null, ['class' => 'form-control']) !!}

        @if ($errors->has('estado_civil'))
            <span class="help-block">
                <small>{{ $errors->first('estado_civil') }}</small>
            </span>
        @endif
    </div>                    
</div>

<div class="col-lg-4">
    <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
        {!! Form::label('surnames_em', 'Apellidos') !!} <small class="text-danger">*</small>
        {!! Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Martínez Pérez']) !!}

        @if ($errors->has('apellidos'))
            <span class="help-block">
                <small>{{ $errors->first('apellidos') }}</small>
            </span>
        @endif
    </div>
    
    <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
        {!! Form::label('gender_em', 'Género') !!} <small class="text-danger">*</small>
        {!! Form::select('genero', array('' => 'Seleccione', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino'), null, ['class' => 'form-control']) !!}

        @if ($errors->has('genero'))
            <span class="help-block">
                <small>{{ $errors->first('genero') }}</small>
            </span>
        @endif
    </div>
</div>

<div class="col-lg-12">
    <h5 class="page-header"></h5>
</div>

@if($empleado)

    <div class="col-lg-4">
        <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">                         
            {!! Form::label('code_em', 'Código') !!} <small class="text-danger">*</small>
            {!! Form::text('codigo', $value = $empleado->info->codigo, ['class' => 'form-control', 'placeholder' => 'EM-0004256']) !!}

            @if ($errors->has('codigo'))
                <span class="help-block">
                    <small>{{ $errors->first('codigo') }}</small>
                </span>
            @endif
        </div>
         <div class="form-group{{ $errors->has('contrato') ? ' has-error' : '' }}">
            {!! Form::label('contract_status', 'Contrato') !!} <small class="text-danger">*</small>
            {!! Form::select('contrato', array('' => 'Seleccione', 'Determinado' => 'Determinado', 'Indeterminado' => 'Indeterminado'), $value = $empleado->info->contrato, ['class' => 'form-control', 'id' => 'contrato']) !!}

            @if ($errors->has('contrato'))
                <span class="help-block">
                    <small>{{ $errors->first('contrato') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('duracion') ? ' has-error' : '' }}">
            {!! Form::label('duracion', 'Duración') !!}
            {!! Form::number('duracion', $empleado->info->duracion, ['placeholder' => '30', 'class' => 'form-control', 'id' => 'duracion', 'disabled' => 'disabled']) !!}

            @if ($errors->has('duracion'))
                <span class="help-block">
                    <small>{{ $errors->first('duracion') }}</small>
                </span>
             @endif
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group{{ $errors->has('fecha_de_admision') ? ' has-error' : '' }}">
            {!! Form::label('date_of_admission', 'Fecha de ingreso') !!} <small class="text-danger">*</small>
            {!! Form::date('fecha_de_admision', $value = $empleado->info->fecha_de_admision, ['class' => 'form-control']) !!}

            @if ($errors->has('fecha_de_admision'))
                <span class="help-block">
                    <small>{{ $errors->first('fecha_de_admision') }}</small>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('turno') ? ' has-error' : '' }}">
            {!! Form::label('turno_id', 'Turno') !!} <small class="text-danger">*</small>
            {!! Form::select('turno_id', $turnos, null, ['class' => 'form-control']) !!}

            @if ($errors->has('turno'))
                <span class="help-block">
                    <small>{{ $errors->first('turno') }}</small>
                </span>
            @endif
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group{{ $errors->has('cestaticket') ? ' has-error' : '' }}">
            {!! Form::label('cestaticket', 'Cestaticket') !!} <small class="text-danger">*</small>
            {!! Form::select('cestaticket', array('' => 'Seleccione', 'Sí' => 'Si', 'No' => 'No'), $value = $empleado->info->cestaticket, ['class' => 'form-control']) !!}

            @if ($errors->has('cestaticket'))
                <span class="help-block">
                    <small>{{ $errors->first('cestaticket') }}</small>
                </span>
            @endif
        </div> 
        <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
            {!! Form::label('cargo_id', 'Cargo') !!} <small class="text-danger">*</small>
            {!! Form::select('cargo_id', $cargos, null, ['class' => 'form-control']) !!}

            @if ($errors->has('cargo'))
                <span class="help-block">
                    <small>{{ $errors->first('cargo') }}</small>
                </span>
            @endif
        </div>
    </div>

    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('bank', 'Banco') !!}
            {!! Form::text('banco', $value = $empleado->info->banco, ['class' => 'form-control', 'placeholder' => 'BBVA Provincial']) !!}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('type_account', 'Cuenta') !!}
            {!! Form::select('cuenta_tipo', array('' => 'Seleccione', 'Ahorro' => 'Ahorro', 'Corriente' => 'Corriente'), $value = $empleado->info->cuenta_tipo, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('account_em', 'Nro. Cuenta', ['class' => 'control-label']) !!}
            {!! Form::text('cuenta_numero', $value = $empleado->info->cuenta_numero, ['class' => 'form-control', 'placeholder' => '2034 4505 73 1000034682']) !!}
        </div>
    </div>
@else
    <div class="col-lg-4">
        <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">                        
            {!! Form::label('code_em', 'Código') !!} <small class="text-danger">*</small>
            {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'EM-0004256']) !!}

            @if ($errors->has('codigo del empleado'))
                <span class="help-block">
                    <small>{{ $errors->first('codigo') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('contrato') ? ' has-error' : '' }}">
            {!! Form::label('contract_status', 'Tipo de contrato') !!} <small class="text-danger">*</small>
            {!! Form::select('contrato', array('' => 'Seleccione', 'Determinado' => 'Determinado', 'Indeterminado' => 'Indeterminado'), null, ['class' => 'form-control', 'id' => 'contrato']) !!}

            @if ($errors->has('contrato'))
                <span class="help-block">
                    <small>{{ $errors->first('contrato') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
            {!! Form::label('duracion', 'Duración') !!}
            {!! Form::number('duracion', null, ['placeholder' => '30', 'class' => 'form-control', 'id' => 'duracion', 'disabled' => 'disabled']) !!}

            @if ($errors->has('cargo'))
                <span class="help-block">
                    <small>{{ $errors->first('cargo') }}</small>
                </span>
             @endif
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group{{ $errors->has('fecha_de_admision') ? ' has-error' : '' }}">
            {!! Form::label('date_of_admission', 'Fecha de ingreso') !!} <small class="text-danger">*</small>
            {!! Form::date('fecha_de_admision', null, ['class' => 'form-control']) !!}

            @if ($errors->has('fecha_de_admision'))
                <span class="help-block">
                    <small>{{ $errors->first('fecha_de_admision') }}</small>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('turno') ? ' has-error' : '' }}">
            {!! Form::label('turno_id', 'Turno') !!} <small class="text-danger">*</small>
            {!! Form::select('turno_id', $turnos, null, ['placeholder' => 'Seleccione' ,'class' => 'form-control']) !!}

            @if ($errors->has('turno'))
                <span class="help-block">
                    <small>{{ $errors->first('turno') }}</small>
                </span>
            @endif
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group{{ $errors->has('cestaticket') ? ' has-error' : '' }}">
            {!! Form::label('cestaticket', 'Cestaticket') !!} <small class="text-danger">*</small>
            {!! Form::select('cestaticket', array('' => 'Seleccione', 'Sí' => 'Si', 'No' => 'No'), null, ['class' => 'form-control']) !!}

            @if ($errors->has('cestaticket'))
                <span class="help-block">
                    <small>{{ $errors->first('cestaticket') }}</small>
                </span>
            @endif
        </div> 
        <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
            {!! Form::label('cargo_id', 'Cargo') !!} <small class="text-danger">*</small>
            {!! Form::select('cargo_id', $cargos, null, ['placeholder' => 'Seleccione','class' => 'form-control']) !!}

            @if ($errors->has('cargo'))
                <span class="help-block">
                    <small>{{ $errors->first('cargo') }}</small>
                </span>
             @endif
        </div>
    </div>
                    
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('bank', 'Banco') !!}
            {!! Form::text('banco', null, ['class' => 'form-control', 'placeholder' => 'BBVA Provincial']) !!}
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('type_account', 'Cuenta') !!}
            {!! Form::select('cuenta_tipo', array('' => 'Seleccione', 'Ahorro' => 'Ahorro', 'Corriente' => 'Corriente'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            {!! Form::label('account_em', 'Nro. Cuenta', ['class' => 'control-label']) !!}
            {!! Form::text('cuenta_numero', null, ['class' => 'form-control', 'placeholder' => '2034 4505 73 1000034682']) !!}
        </div>
    </div>
@endif

<div class="col-lg-12">
    <br>
        <div class="form-group tooltip-demo text-center">
            <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
            <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
        </div>
    <br> 
</div>
         
@section('js')
    <script src="{{ asset('js/funciones.js') }}"></script>
@endsection