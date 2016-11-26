@extends('layouts.app')

@section('contenido')
<div class="row">
		<div class="col-lg-12">
				<h5 class="page-header"></h5>
		</div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Platos del día</li>
        </ol>
    </div>
</div>

<div>
    @include('flash::message')
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<em>Platos para mostrar el día de Hoy</em>
			</div>
			<div class="panel-body">
				{!! Form::open(['route' => 'admin.guardar-platos-dia', 'method' => 'POST'])!!}
				{{ csrf_field() }}
				<div class="dataTable_wrapper">
					@include('admin.portal.partials.table')
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
