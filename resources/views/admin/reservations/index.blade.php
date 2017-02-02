@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Reservaciones</li>
		</ol>
	</div>
</div>
<div>
    @include('flash::message')
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
                <em>Listado de reservaciones</em>
            </div>
            <div class="panel-body">
            	<div class="dataTable_wrapper">
                	@include('admin.reservations.partials.table')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
