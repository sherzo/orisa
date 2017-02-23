@extends('layouts.app')

@section('contenido')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="{{ url('admin/adicionales') }}">Adicionales</a></li>
                <li class="active">Editar</li>
            </ol>
        </div>
    </div>
    <div><br>
        @include('flash::message')
    </div>
    {{ Form::model($adicionales, ['route' => ['admin.adicionales.update', $adicionales->id], 'method' => 'PUT']) }}
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editar: {{ $adicionales->nombre }}
                    </div>
                    <div class="panel-body">
                        @include('admin.additionals.partials.fields')
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}

@endsection