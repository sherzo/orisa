@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-12"><br><br>
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{url ('admin/planificaciones')}}">Planificación</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </div>
</div>

{!! Form::open(['route' => 'admin.planificaciones.store', 'method' => 'POST', 'name' => 'form']) !!}
	{{ csrf_field() }}
    @include('admin.planificaciones.partials.fields')
{!! Form::close() !!}      



@endsection