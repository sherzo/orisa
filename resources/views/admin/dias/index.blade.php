@extends('layouts.app')

@section('contenido')
<div class="row">
		<div class="col-lg-12">
				<h5 class="page-header"></h5>
		</div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{url ('admin/planificaciones')}}">Planificación</a></li>
            <li class="active">Días</li>
        </ol>
    </div>
</div>
<div><br>
    @include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12"><br>
        <div class="panel panel-default">
            <div class="panel-heading">
                Días
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    @include('admin.dias.partials.table')
                </div>
            </div>
        </div>                
    </div>
</div>
@endsection