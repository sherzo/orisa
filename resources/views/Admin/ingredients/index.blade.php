@extends('layouts.app')

@section('contenido')

<div class="row">         
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin')}} "><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Ingredientes</li>
        </ol>
        <h4 class="page-header">LISTA DE INGREDIENTES</h4>
    </div>
    <div class="col-lg-4">
        <a  href="{{ url('admin/ingredientes/create') }}" class="btn btn-primary">
            <span class="fa fa-plus"></span> Nuevo
        </a>
    </div>  
    <div class="col-lg-12">
        @include('flash::message')
    </div>
    <div class="col-lg-12"><br>
        <div class="table-responsive">
            <p class="text-muted"><small>Existen {{ $ingredients->total() }} ingredientes registrados</small></p>
                @include('admin.ingredients.partials.table') {!! $ingredients->render() !!}
        </div>
    </div>
</div>

@endsection