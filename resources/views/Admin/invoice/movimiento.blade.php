@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Movimiento</li>
        </ol>
    </div>
</div>

<div class="row">
  <div class="col-md-12">
     @include('flash::message')
   </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <em>Movimiento del día</em>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    @include('admin.invoice.partials.table')
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
