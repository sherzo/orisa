@extends('layouts.app')

@section('contenido')


{{-- */$a=0;/* --}}
{{-- */$k=0;/* --}}
{{-- */$n=0;/* --}}

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/planificaciones') }}"> Planificaciones</a></li>
            <li class="active">Inicio</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <em>Listado de planificaciones realizadas</em>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    @include('admin.turnos.partials.fields-show')
                </div>
            </div>
        </div>  
    </div>
</div> 

@endsection