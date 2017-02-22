@extends('layouts.app')

@section('contenido')

    <div class="row">
    		<div class="col-lg-12">
    				<h5 class="page-header"></h5>
    		</div>
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">Planificaciones </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ url('admin/planificaciones/create') }}">
                <button type="button" class="btn btn-primary "><span class="fa fa-plus"></span></button>
            </a>
        </div>
    </div>
    <div><br>
        @include('flash::message')
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Fechas
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        @include('admin.planificaciones.partials.table') 
                    </div>
                </div>
            </div>                
        </div>
    </div>

@endsection