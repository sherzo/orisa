@extends('layouts.app')

@section('contenido')

<div class="row">
		<div class="col-lg-12">
				<h5 class="page-header"></h5>
		</div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Salsas </li>
        </ol>
    </div>
</div>
<div class="col-lg-14">
    <a href="{{ url('admin/sauces/create') }}">
        <button type="button" class="btn btn-primary "><span class="fa fa-plus"></span> Nuevo</button>
    </a>
</div>
<div><br>
    @include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12"><br>
        <div class="table-responsive">
            <p class="text-muted"><small>Existen {{ $sauces->total() }} tipos de salsas registradas</small></p> 
            @include('admin.sauces.partials.table') {!! $sauces->render() !!}
        </div>
    </div>                   
</div>

@endsection