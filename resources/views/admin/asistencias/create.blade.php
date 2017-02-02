@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/asistencias') }}">Asistencias</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{!! Form::open(['route' => 'admin.asistencias.store', 'method' => 'POST', 'name' => 'form1']) !!}
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <em>Fecha: 
                    @if(isset($day_exists) > 0)
                        {{ $day_exists->fecha }}
                    @else
                        {{ $fecha }}
                    @endif
                    </em>
                </div>
                <div class="panel-body">
                    @include('admin.asistencias.partials.fields')
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}

@endsection