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
            <li><a href="{{ url('admin/planificaciones') }}"> Planificacíon</a></li>
            <li class="active">Ver</li>
        </ol>
    </div>
</div>

<div class="col-lg-18">
    <div class="panel panel-default">
        <div class="panel-heading">
            <em>Buscar planificaciones</em>
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'admin.planificaciones.administrar.dias.turnos.view', 'method' => 'GET']) !!} {{ csrf_field() }}
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="form-group">                           
                                {!! Form::select('planificacion', $planificacion, null, ['class' => 'form-control']) !!}
                            </div>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default" id="buscar" title="Buscar productos">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
            
    @if($planning) 
        
    <div class="panel panel-default">
        <div class="panel-heading">
            <span><i class="fa fa-calendar-o"></i></span>
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => ['admin.planificaciones.administrar.dias.turnos.edit', $id], 'method' => 'GET']) !!} {{ csrf_field() }}   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            @include('admin.turnos.partials.fields-show')
                        </div> 
                    </div>
                </div>
                <div class="col-lg-12 tooltip-demo text-center">
                    <hr>
                    <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-floppy-open fa-2x"></span></button>
                    <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>  

    @endif

</div> 

@endsection