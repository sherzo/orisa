@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/planificaciones') }}"> Clientes</a></li>
            <li class="active">Buscar</li>
        </ol>
    </div>
</div>

	{!! Form::open(['route' => 'admin.clientes.create', 'method' => 'GET', 'class' => 'form-inline']) !!}
<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
	            <em>Registro de Clientes</em>
	        </div>
	        <div class="panel-body">
	            @include('admin.clients.partials.form-search')
	        </div>
	    </div>
	</div>
</div>
{!! Form::close() !!}

@endsection