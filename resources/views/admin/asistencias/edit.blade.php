@extends('layouts.app')

@section('contenido')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/asistencias') }}">Asistencias</a></li>
            <li class="active">Edit</li>
        </ol>
    </div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{{ Form::model($asistencia, ['route' => ['admin.asistencias.update', $asistencia->id], 'method' => 'PUT']) }}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <em>Asistencia: {{ $asistencia->attendays->fecha }}</em>
                </div>
                <div class="panel-body">
                    @include('admin.asistencias.partials.fields-edit')
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}

@endsection