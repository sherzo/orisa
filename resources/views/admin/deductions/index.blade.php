@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active"> Deducciones</li>
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
                <em>Listado de Deducciones</em>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    @include('admin.deductions.partials.table')
                </div>
            </div>
        </div>                
    </div>
</div>

@endsection