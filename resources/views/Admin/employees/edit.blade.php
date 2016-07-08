@extends('layout.layoutAdminTres')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ route('admin.employees.index') }}">Empleados</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </div>
</div>

@include('admin.partial.errors')

{{ Form::model($employee, array('route' => array('admin.employees.update', $employee->id), 'method' => 'PUT')) }}
<div class="panel panel-default">
    <div class="panel-heading"> Datos Empleado</div>
        <div class="panel-body">

<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#personales" aria-controls="personales" role="tab" data-toggle="tab">Personales</a></li>
    <li role="presentation"><a href="#laborables" aria-controls="laborables" role="tab" data-toggle="tab">Laborables</a></li>
    <li role="presentation"><a href="#nomina" aria-controls="nomina" role="tab" data-toggle="tab">Cuenta Nómina</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="personales">
    <br/><h4></h4><br/>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('document_em', 'Cédula') !!}
        {!! Form::text('document_em', null, ['class' => 'form-control', 'disabled']) !!}
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
            
    </div>

<div role="tabpanel" class="tab-pane" id="laborables">
    <br/><h4></h4><br/>
<div class="col-xs-4">
    <div class="form-group">                        
        {!! Form::label('code_em', 'Código', ['class' => 'control-label']) !!}
        {!! Form::text('code_em', null, ['class' => 'form-control', 'placeholder' => 'EM-0004256']) !!}
    </div>
    
</div>
<div class="col-xs-4">
     <div class="form-group">
        {!! Form::label('date_of_admission', 'Fecha de ingreso') !!}
        {!! Form::date('date_of_admission', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('contract_status', 'Contrato') !!}
        {!! Form::select('contract_status', array('Determinado' => 'Determinado', 'Indeterminado' => 'Indeterminado'), null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('cestaticket', 'Cestaticket', ['class' => 'control-label']) !!}
        {!! Form::select('cestaticket', array('Sí' => 'Si', 'No' => 'No'), null, ['class' => 'form-control']) !!}
    </div> 
    <div class="form-group">
        {!! Form::label('duration_em', 'Duración') !!}
        {!! Form::text('duration_em', null, ['class' => 'form-control', 'placeholder' => '60']) !!}
    </div>
</div>
</div> 

<div role="tabpanel" class="tab-pane" id="nomina">
    <br/><h4></h4><br/>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('bank', 'Banco') !!}
        {!! Form::text('bank', null, ['class' => 'form-control', 'placeholder' => 'BBVA Provincial']) !!}
    </div>
</div>
<div class="col-xs-4">
     <div class="form-group">
        {!! Form::label('type_account', 'Cuenta') !!}
        {!! Form::select('type_account', array('Ahorro' => 'Ahorro', 'Corriente' => 'Corriente'), null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-xs-4">
     <div class="form-group">
        {!! Form::label('account_em', 'Nro. Cuenta', ['class' => 'control-label']) !!}
        {!! Form::text('account_em', null, ['class' => 'form-control', 'placeholder' => '2034 4505 73 1000034682']) !!}
    </div>
</div>
</div>

        </div>  
    </div>
</div>

<!-- Boton -->
<div class="form-group">
    <br/>
    <center>
        <button class="btn btn-primary btn-sm">
            <span class="fa fa-refresh fa-2x"></span>
        </button>
        <button class="btn btn-success btn-sm">
            <span class="fa fa-save fa-2x"></span>
        </button>
    </center>
</div> 

{{ Form::close() }}  

@endsection
