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
<div class="col-lg-14">
 	<a href="{{ route('admin.deducciones.edit', [$id]) }}"><button type="button" class="btn btn-primary"><span class="fa fa-pencil"></span></button></a>
</div>
<div><br>
	@include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12"><br>
        <div class="panel panel-default">
            <div class="panel-heading">
                Deducciones
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