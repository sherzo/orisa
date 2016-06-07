@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('document_em', 'Cédula') !!}
        {!! Form::text('document_em', null, ['class' => 'form-control', 'placeholder' => 'V-10054256']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('birthdate_em', 'Fecha de nacimiento') !!}
        {!! Form::date('birthdate_em', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('country_em', 'País') !!}
        {!! Form::text('country_em', null, ['class' => 'form-control', 'placeholder' => 'Venezuela']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('addres_em', 'Dirección', ['class' => 'control-label']) !!}
        {!! Form::textarea('addres_em', null, ['class' => 'form-control', 'rows' => '4']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('names_em', 'Nombres') !!}
        {!! Form::text('names_em', null, ['class' => 'form-control', 'placeholder' => 'José Gregorio']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('civil_status_em', 'Estado civil') !!}
        {!! Form::select('civil_status_em', array('Soltero/a' => 'Soltero/a', 'Comprometido/a' => 'Comprometido/a', 'casado/a' => 'Casado/a', 'Divorciado/a' => 'Divorciado/a', 'Viudo/a' => 'Viudo/a'), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('state_em', 'Estado') !!}
        {!! Form::text('state_em', null, ['class' => 'form-control', 'placeholder' => 'Aragua']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone_em', 'Telefono', ['class' => 'control-label']) !!}
        {!! Form::text('phone_em', null, ['class' => 'form-control', 'placeholder' => '412-2411757']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('surnames_em', 'Apellidos', ['class' => 'control-label']) !!}
        {!! Form::text('surnames_em', null, ['class' => 'form-control', 'placeholder' => 'Martínez Pérez']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('gender_em', 'Género') !!}
        {!! Form::select('gender_em', array('Masculino' => 'Masculino', 'Femenino' => 'Femenino'), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city_em', 'Ciudad') !!}
        {!! Form::text('city_em', null, ['class' => 'form-control', 'placeholder' => 'Maracay']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email_em', 'Correo') !!}
        {!! Form::text('email_em', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com'] ) !!}
    </div>
</div>
