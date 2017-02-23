@extends('layouts.app')

@section('contenido')

    <div class="row">
    		<div class="col-lg-12">
    				<h5 class="page-header"></h5>
    		</div>
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">Adicionales</li>
                <li class="active">Inicio</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <a href="{{ url('admin/adicionales/create') }}">
                <button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
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
                    LISTADO DE DEDUCCIONES Y ASIGNACIONES
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        @include('admin.additionals.partials.table')
                    </div>
                </div>
            </div>                
        </div>
    </div>

@endsection