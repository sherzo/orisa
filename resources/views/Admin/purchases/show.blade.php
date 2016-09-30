@extends('layouts.app')

@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ url('admin/compra')}}">Encargo</a></li>
			<li class="active">Ver</li>
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
                <em>ORDEN DE COMPRA Nº <strong>{{ $order->id }}</strong> </em>
                <span class="label {!! $order->estatus == 0 ? 'label-warning' : 'label-success' !!} pull-right">
					{{ $order->estatus == 0 ? 'En espera' : 'Recibido' }}
				</span>
            </div>
            <div class="panel-body">
            	<div class="dataTable_wrapper">
                	@include('admin.purchases.partials.fields-view')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection