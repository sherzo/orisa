@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ route('admin.comandas.en-espera') }}">Comandas</a></li>
            <li class="active">Procesadas</li>
        </ol>
    </div>
</div>
<div>
    @include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <em>Comandas Procesadas</em>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    @include('admin.comandas.partials.process-table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection