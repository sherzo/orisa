@extends('layouts.app')

@section('contenido')

 <!-- Page Content -->
<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Tragos</li>
        </ol>
    </div>

    <div class="col-lg-4">
        <a  href="{{ url('admin/tragos/create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Nuevo Trago">
            <span class="fa fa-plus"></span>
        </a>
    </div><br>
</div>
<div class="row">
	<div class="col-md-12">
		@include('flash::message')
	</div>
</div>
          <!--  CIERRE DEL ROW -->
          <div class="row">
            @foreach($beverages as $beverage)
              <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="../img/beverages/{{ $beverage->image->imagen }}" alt="" class="img-responsive">

                  </div>
                  <div class="panel-footer">
                    {{ $beverage->trago }}

                    <!-- <a href="#" class="btn btn-default btn-xs pull-right "> <span class="fa fa-trash-o fa-2x"></span> </a> &nbsp;&nbsp; -->


                    <a href="{{ route('admin.tragos.show', $beverage->id)}}" class="btn btn-default btn-xs pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver"> <span class="fa fa-eye fa-2x"></span> </a>

                  </div>
                </div>
              </div>
            @endforeach
          </div>
  @endsection
