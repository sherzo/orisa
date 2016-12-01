@extends('layouts.app')

@section('contenido')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Bitacora</li>
        </ol>
    </div>
</div>

<br>
<div>
    @include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <em>Bitacora de Operaciones</em>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    @include('admin.bitacora.partials.table')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
