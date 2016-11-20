@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/empleados') }}">Empleados</a></li>
            <li class="active">Editar</li>
        </ol>
    </div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{{ Form::model($others_deductions, ['route' => ['admin.deducciones_extras.update', $others_deductions->id], 'method' => 'PUT']) }}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <em>Editar: {{ $others_deductions->nombre }}</em>
                </div>
                <div class="panel-body">
                    @include('admin.deductions_extra.partials.fields')
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}

@endsection
