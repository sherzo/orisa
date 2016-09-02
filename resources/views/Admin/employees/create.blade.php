@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ route('admin.employees.index') }}">Empleados</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </div>
</div>

@include('admin.partial.errors')

{{ Form::open(['route' => 'admin.employees.store', 'method' => 'POST']) }}
    
    @include('admin.employees.partials.fields')

{{ Form::close() }}  

@endsection
