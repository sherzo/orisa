@extends('layout.layoutAdmin')

@section('contenido')

<div class="row">
  <div class="col-lg-12">
      <ol class="breadcrumb">
      <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="active">Compra </li>
      </ol>
      <h4 class="page-header">Nueva orden de compra</h4>
  </div>
              
  <div class="col-lg-4">
      <a href="{{ url('admin/employees/create') }}">
      <button type="button" class="btn btn-primary">
      <span class="fa fa-list"></span> Lista</button></a>
  </div>

</div>
<br>
<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Datos de la compra
				
				
				</div>
					<div class="panel-body">

  @include('admin.purchases.partials.order')


					</div>
			</div>
		</div>
</div>
@stop