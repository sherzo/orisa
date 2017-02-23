@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/planificaciones') }}"> Planificacíones</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </div>
</div>
<br>
    @include('flash::message')

<div class="col-lg-12">
{!! Form::open(['route' => 'admin.planificaciones.administrar.dias.turnos.store', 'method' => 'POST', 'name' => 'form']) !!}
    {{ csrf_field() }}
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                FECHAS DE PLANIFICACIÓN DESDE: {{ $planificacion->full_dates }}
            </div>
            <div class="panel-body">   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            @include('admin.turnos.partials.fields')
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group tooltip-demo text-center">
        <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
        <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
    </div>  
{!! Form::close() !!}
</div>


@endsection