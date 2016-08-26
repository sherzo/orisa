@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-12"><br><br>
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{url ('admin/planificaciones')}}">Planificación</a></li>
            <li class="active">Administrar</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"> Administrar - Planificación</h3>
    </div>
</div>

{!! Form::open(['route' => 'admin.planificaciones.administrar.dias.store', 'method' => 'POST', 'name' => 'form']) !!}
    @include('admin.dias.partials.fields_create')
{!! Form::close() !!}   

@endsection
