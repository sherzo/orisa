@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{url ('admin/planificaciones')}}">Planificación</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </div>
</div>

@include('admin.partial.errors')

{{ Form::open(['route' => 'admin.planificaciones.store', 'method' => 'POST']) }}
   
    @include('admin.planning.partials.fields')
    <!-- Boton -->
<div class="form-group">
    <br/>
    <center>
        <button class="btn btn-primary btn-sm">
            <span class="fa fa-refresh fa-2x"></span>
        </button>
        <button class="btn btn-success btn-sm">
            <span class="fa fa-save fa-2x"></span>
        </button>
    </center>
</div> 
{{ Form::close() }}  


@endsection