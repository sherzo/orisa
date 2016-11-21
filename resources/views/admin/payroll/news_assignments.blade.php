@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Prenómina</li>
			<li class="active">Asignaciones</li>
		</ol>
	</div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{!! Form::open(['route' => 'admin.temporary_assigments.store', 'method' => 'POST']) !!}
	{{ csrf_field() }}
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
		            <em>Asignaciones Extras</em>
		        </div>
		        <div class="panel-body">
		         	@include('admin.payroll.partials.fields-assignments')
		        </div>
		    </div>
		</div>
	</div>
{!! Form::close() !!}

@endsection