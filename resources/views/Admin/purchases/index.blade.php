@extends('layout.layoutAdmin')

@section('contenido')

<div class="row"><br>
  <div class="col-lg-12">
      <ol class="breadcrumb">
      <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="active">Compra </li>
      </ol>
      <h4 class="page-header">NUEVA ORDEN DE COMPRA</h4>
  </div>

  <!--<div class="col-lg-3 pull-right">
      <a href="{{ url('admin/employees/create') }}">
      <button type="button" class="btn btn-primary">
      <span class="fa fa-list"></span> Lista de ordenes </button></a>
  </div>
-->
</div>

<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Datos de la compra
				
				
				</div>
					<div class="panel-body">
{!! Form::open(['method' => 'POST']) !!}

  
  
@include('admin.purchases.partials.order')

{!! Form::close() !!}
					</div>
			</div>
		</div>
</div>
@stop