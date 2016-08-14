@extends('layouts.app')

@section('contenido')

<div class="row">
  <div class="col-lg-12">
      <ol class="breadcrumb">
      <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="{{ url('admin/compra')}}">Compra</a></li>
      <li><a href="{{ url('admin/compra/ordenes')}}">Listado</a></li>
      <li class="active">
        Ver
      </li>
      </ol>
      <!--<h4 class="page-header">Nueva orden de compra</h4>-->
  </div>
              
<!--  <div class="col-lg-4">
      <a href="{{ url('admin/compra/ordenes') }}">
      <button type="button" class="btn btn-primary">
      <span class="fa fa-list"></span> Lista de ordenes</button></a>
  </div>
-->
</div>

<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Datos de la compra 
        <strong>#{{ $purchase->id }}</strong> 
        
        <span class="label {!! $purchase->status == 0 ? 'label-warning' : 'label-success' !!} pull-right">
          {!! $purchase->status == 0 ? 'En espera' : 'Recibida' !!}
        </span>
						
				</div>
					<div class="panel-body">
          @include('flash::message')

              @include('admin.purchases.partials.data')
					</div>
			</div>
		</div>
</div>
@stop