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
            <li class="active">Lista</li>
        </ol>
    </div>
</div>
{!! Form::open(['route' => 'admin.planificaciones.administrar.dias.turnos.create', 'method' => 'GET']) !!}
	<div class="row">
	    <div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<em>Busqueda para crear planificaciones</em>	
				</div>
				<div class="panel-body">
					@include('admin.turnos.partials.list')
				</div>
			</div>
		</div>
	</div>
{!! Form::close() !!}

@endsection