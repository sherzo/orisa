@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/planificaciones') }}"> Planificacíon</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </div>
</div>
<div class="col-lg-12"><br>
    @include('flash::message')
</div>
<div class="col-lg-10">
	<p> Fecha: {{ $planificacion->fechas }}</p>
	<p> Estatus: {{ $planificacion->estatus }}</p>
	<p> Creada: {{ $planificacion->created_at }}</p>
</div>
<div class="col-lg-12">
	{!! Form::open(['route' => 'admin.planificaciones.administrar.dias.turnos.store', 'method' => 'POST', 'name' => 'form']) !!}
		{{ csrf_field() }} @include('admin.turnos.partials.fields')
	{!! Form::close() !!} 
</div>

@endsection