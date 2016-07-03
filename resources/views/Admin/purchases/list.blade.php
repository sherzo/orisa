@extends('layout.layoutAdminDos')

@section('contenido')

<div class="row">
  <div class="col-lg-12">
      <ol class="breadcrumb">
      <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class=""><a>Compra </a></li>
      <li class="active">Listado</li>
      </ol>
      <h4 class="page-header">Listado de ordenes</h4>
  </div>
              
  <div class="col-lg-4">
      <a href="{{ url('admin/compra') }}">
      <button type="button" class="btn btn-primary">
      <span class="fa fa-plus"></span> Nueva</button></a>
  </div>
</div>
<div class="row"><br>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <p class="text-muted">Existen {{ $purchases->total() }} ordenes registradas</p>                        
                            @include('admin.purchases.partials.table')

                            {!! $purchases->render() !!}
                        </div>
                    </div>
</div>

@stop