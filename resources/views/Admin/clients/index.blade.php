@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12"><br><br>
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Clientes</li>
        </ol>
        <h4 class="page-header">LISTA DE CLIENTES</h4>
    </div>
    <div class="col-lg-4">
        <a  href="{{ url('admin/clientes/create') }}" class="btn btn-primary">
            <span class="fa fa-plus"></span> Nuevo
        </a>
    </div> 
    <div class="col-lg-12">
        @include('flash::message')
    </div>
    <div class="col-lg-12"><br>
        <div class="table-responsive">
            <p class="text-muted"><small>Existen {{ $clients->total() }} clientes registrados</small></p> 
            @include('admin.clients.partials.table') {!! $clients->render() !!}
        </div>
    </div>
</div>

@endsection