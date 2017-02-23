@extends('layouts.app')

@section('contenido')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"></h1>
			<ol class="breadcrumb">
				<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="{{ url('admin/adicionales') }}">Adicionales</a></li>
				<li class="active">Nuevo</li>
			</ol>
		</div>
	</div>

	{!! Form::open(['route' => 'admin.adicionales.store', 'method' => 'POST']) !!}
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
			            Registro de deducción o asignación
			            <small class="text-center pull-right"><strong>Nota:</strong> Los campos marcados con (<span class="text-danger">*</span>) son obligatorios</small>
			        </div>
			        <div class="panel-body">
			            @include('admin.additionals.partials.fields')
			        </div>
			    </div>
			</div>
		</div>
	{!! Form::close() !!}
	
@endsection