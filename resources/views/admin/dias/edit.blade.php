@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ url('admin/planificaciones/administrar/dias') }}">Planificaciones</a></li>
			<li class="active">Editar</li>
		</ol>
	</div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{{ Form::model($dia, ['route' => ['admin.planificaciones.administrar.dias.update', $dia->id], 'method' => 'PUT']) }}
	{{ csrf_field() }}
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
		            <em>Editar: {{ $dia->dia }}</em>
		        </div>
		        <div class="panel-body">
		            @include('admin.dias.partials.fields_edit')
		        </div>
		    </div>
		</div>
	</div>
{!! Form::close() !!}

@endsection