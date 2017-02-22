@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/planificaciones') }}"> Planificacíon</a></li>
            <li class="active">Administrar</li>
        </ol>
    </div>
</div>

<div class="col-lg-12"><br>
    @include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <em> Dias correspondientes a la planificación</em>
            </div>
                {!! Form::open(['route' => 'admin.planificaciones.administrar.dias.store', 'method' => 'POST', 'name' => 'form']) !!}
                    {{ csrf_field() }}  @include('admin.dias.partials.fields_create')
                {!! Form::close() !!}   
        </div>
    </div>
</div>

@endsection
