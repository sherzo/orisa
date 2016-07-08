@extends('layout.layoutAdmin')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active"> Turnos </li>
		</ol>
		<h4 class="page-header">LISTA DE PLANIFICACIÓN</h4>
	</div>       

{!! Form::open(['route' => 'admin.turnos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right']) !!}
<div class="input-group"> 
	<input type="text" class="form-control" placeholder="Buscar" name="name">
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</span>
</div>
{!! Form::close() !!}

<div class="col-lg-4">
	<a href="{{ url('admin/turnos/create') }}"><button type="button" class="btn btn-primary"><span class="fa fa-plus"></span> Nuevo </button></a>
</div>
</div>

<div class="row"><br>
	<div class="col-lg-12">
		<div class="table-responsive">
			<p>Existen {{ $employee_has_shifts->total() }} planificaciones</p>
			@include('admin.shifts.partials.table') {!! $employee_has_shifts->render() !!}
		</div>                
	</div>
</div>
@endsection