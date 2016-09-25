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
            <li class="active">Select</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				Datos de la Planificación	
			</div>
			<div class="panel-body">
			{!! Form::open(['route' => 'admin.planificaciones.administrar.dias.turnos.create', 'method' => 'GET']) !!}
				@include('admin.turnos.partials.list')
			{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection