@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ url('admin/clientes') }}">Clientes</a></li>
			<li class="active">Edit</li>
		</ol>
	</div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{{ Form::model($client, ['route' => ['admin.clientes.update', $client->id], 'method' => 'PUT']) }}
	{{ csrf_field() }}
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
		            <em>Editar empleado: {{ $client->nombre }}</em>
		        </div>
		        <div class="panel-body">
		            @include('admin.clients.partials.fields')
		        </div>
		    </div>
		</div>
	</div>
{!! Form::close() !!}

@endsection