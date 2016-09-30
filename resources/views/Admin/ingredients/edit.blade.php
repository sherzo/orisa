@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ route('admin.ingredientes.index') }}">Ingredientes</a></li>
			<li class="active">Editar</li>
		</ol>
	</div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{{ Form::model($ingredient, ['route' => ['admin.ingredientes.update', $ingredient->id], 'method' => 'PUT']) }}
	{{ csrf_field() }}
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
		            <em>Editar Ingrediente <strong>{{ $ingredient->ingrediente }}</strong></em>
		        </div>
		        <div class="panel-body">
		            @include('admin.ingredients.partials.fields')
		        </div>
		    </div>
		</div>
	</div>
{!! Form::close() !!}

@endsection