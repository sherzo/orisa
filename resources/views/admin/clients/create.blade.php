@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ route('admin.clientes.index') }}">Clientes</a></li>
			<li class="active">Nuevo</li>
		</ol>
	</div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{!! Form::open(['route' => 'admin.clientes.store', 'method' => 'POST', 'id' => 'cliente']) !!}
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
		            <em>Registro de cliente</em>
		        </div>
		        <div class="panel-body">
		            @include('admin.clients.partials.fields')
		        </div>
		    </div>
		</div>
	</div>
{!! Form::close() !!}

@endsection

@section('js')
<script src="{{ asset('js/validaciones.js') }}"></script>
@endsection
