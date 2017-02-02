@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ url('admin/clientes') }}">Clientes</a></li>
			<li class="active">Buscar</li>
		</ol>
	</div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{!! Form::open(['route' => 'admin.clientes.create', 'method' => 'GET', 'class' => 'form-inline']) !!}
<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
	            <em>Cédula de Identidad</em>
	        </div>
	        <div class="panel-body">
	            @include('admin.clients.partials.form-search')
	        </div>
	    </div>
	</div>
</div>
{!! Form::close() !!}

@endsection