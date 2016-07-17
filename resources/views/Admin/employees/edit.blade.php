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

{!! Form::model($employee, ['route' => array('admin.employees.update', $employee), 'method' => 'PUT']) !!}
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
        {!! Form::text('dni', null, ['class' => 'form-control', 'disabled']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('birthdate_em', 'Fecha de nacimiento') !!}
        {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('country_em', 'País') !!}
        {!! Form::text('pais_em', null, ['class' => 'form-control', 'placeholder' => 'Venezuela']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('addres_em', 'Dirección', ['class' => 'control-label']) !!}
        {!! Form::textarea('direccion_em', null, ['class' => 'form-control', 'rows' => '4']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('names_em', 'Nombres') !!}
        {!! Form::text('nombres_em', null, ['class' => 'form-control', 'placeholder' => 'José Gregorio']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('civil_status_em', 'Estado civil') !!}
        {!! Form::select('estado_civil', array('Soltero/a' => 'Soltero/a', 'Comprometido/a' => 'Comprometido/a', 'casado/a' => 'Casado/a', 'Divorciado/a' => 'Divorciado/a', 'Viudo/a' => 'Viudo/a'), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('state_em', 'Estado') !!}
        {!! Form::text('estado_em', null, ['class' => 'form-control', 'placeholder' => 'Aragua']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone_em', 'Telefono', ['class' => 'control-label']) !!}
        {!! Form::text('telefono_em', null, ['class' => 'form-control', 'placeholder' => '412-2411757']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('surnames_em', 'Apellidos', ['class' => 'control-label']) !!}
        {!! Form::text('apellidos_em', null, ['class' => 'form-control', 'placeholder' => 'Martínez Pérez']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('gender_em', 'Género') !!}
        {!! Form::select('genero_em', array('Masculino' => 'Masculino', 'Femenino' => 'Femenino'), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city_em', 'Ciudad') !!}
        {!! Form::text('ciudad_em', null, ['class' => 'form-control', 'placeholder' => 'Maracay']) !!}
    </div>
</div>
            
    </div>

<div role="tabpanel" class="tab-pane" id="laborables">
    <br/><h4></h4><br/>
<div class="col-xs-4">
    <div class="form-group">                        
        {!! Form::label('code_em', 'Código', ['class' => 'control-label']) !!}
        {!! Form::text('code_em', $employee->data->code_em, ['class' => 'form-control', 'placeholder' => 'EM-0004256']) !!}
        {!! Form::hidden('employee_id', $employee->data->id)!!}    
    </div>
    
</div>
<div class="col-xs-4">
     <div class="form-group">
        {!! Form::label('date_of_admission', 'Fecha de ingreso') !!}
        {!! Form::date('date_of_admission', $employee->data->date_of_admission, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('contract_status', 'Contrato') !!}
        {!! Form::select('contract_status',array('Determinado' => 'Determinado', 'Indeterminado' => 'Indeterminado'), $employee->data->contract_status, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('cestaticket', 'Cestaticket', ['class' => 'control-label']) !!}
        {!! Form::select('cestaticket', array('Sí' => 'Si', 'No' => 'No'), $employee->data->cestaticket, ['class' => 'form-control']) !!}
    </div> 
    <div class="form-group">
        {!! Form::label('duration_em', 'Duración') !!}
        {!! Form::text('duration_em', $employee->data->duration_em, ['class' => 'form-control', 'placeholder' => '60']) !!}
    </div>
</div>
</div> 

<div role="tabpanel" class="tab-pane" id="nomina">
    <br/><h4></h4><br/>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('bank', 'Banco') !!}
        {!! Form::text('bank', $employee->data->bank, ['class' => 'form-control', 'placeholder' => 'BBVA Provincial']) !!}
    </div>
</div>
<div class="col-xs-4">
     <div class="form-group">
        {!! Form::label('type_account', 'Cuenta') !!}
        {!! Form::select('type_account', array('Ahorro' => 'Ahorro', 'Corriente' => 'Corriente'), $employee->data->type_account, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-xs-4">
     <div class="form-group">
        {!! Form::label('account_em', 'Nro. Cuenta', ['class' => 'control-label']) !!}
        {!! Form::text('account_em', $employee->data->account_em, ['class' => 'form-control', 'placeholder' => '2034 4505 73 1000034682']) !!}
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

{!! Form::close() !!}  

@endsection
