@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/planificaciones/administrar/dias/turnos') }}"> Planificacíon</a></li>
            <li class="active">Editar</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <em>Planificación: {{ $id }}</em>
            </div>
            {!! Form::open(['route' => ['admin.planificaciones.administrar.dias.turnos.update', $id], 'method' => 'PUT']) !!} 
            	{{ csrf_field() }} @include('admin.turnos.partials.edit-fields')
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection