@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ route('admin.empleados.index') }}">Empleados</a></li>
            <li class="active">Buscar</li>
        </ol>
    </div>
</div>

<div class="row">	
	<div class="col-lg-6 col-lg-offset-3"><br>
		<div class="panel panel-default">
			<div class="panel-heading">DNI - CÉDULA</div>
            <div class="panel-body">
                <div class="row">       
                    @include('admin.empleados.partials.search')
                </div>
             </div>
        </div>
	</div>
</div>


@endsection
