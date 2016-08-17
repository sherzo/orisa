@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-12"><br><br>
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{url ('admin/planificaciones')}}">Planificación</a></li>
            <li class="active">Editar</li>
        </ol>
    </div>
{!! Form::model($dia, array('route' => array('admin.planificaciones.administrar.dias.update', $dia->id), 'method' => 'PUT')) !!}

	@include('admin.planificaciones.partials.edit_days')

{!! Form::close() !!}
     
</div>   

@endsection