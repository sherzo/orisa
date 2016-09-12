@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active"> Planificación</li>
        </ol>
    </div>
</div>
<div class="col-lg-14">
 	<a href="{{ url('admin/planificaciones/administrar/dias/turnos/seleccionar-planificacion') }}"><button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button></a>
</div>
<div>
	@include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12"><br>
        <div class="panel panel-default">
            <div class="panel-heading">
                Empleados
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    @include('admin.turnos.partials.table')
                </div>
            </div>
        </div>                
    </div>
</div>

@endsection