@extends('layouts.app')


@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ route('admin.tragos.index') }}">Tragos</a></li>
            <li class="active">Editar</li>
        </ol>
    </div>
</div>

<div>
    @include('flash::message')
</div>
@endsection