@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Clientes</li>
        </ol>
    </div>

    <div class="col-lg-4">
        <a  href="{{ url('admin/clientes/buscar') }}" class="btn btn-primary">
            <span class="fa fa-plus"></span>
        </a>
    </div>
</div>
<div class="row">
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