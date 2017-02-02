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
            <li class="active">Jugos</li>
        </ol>
    </div>


    <div class="col-lg-4">
        <a  href="{{ url('admin/jugos/create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Nuevo Jugo">
            <span class="fa fa-plus"></span>
        </a>
    </div><br>
</div>
<div class="row">
	<div class="col-md-12">
		@include('flash::message')
	</div>
</div>

          <div class="row">
            @foreach($juices as $juice)
              <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="../img/juices/{{ $juice->image->imagen }}" alt="" class="img-responsive">
                  </div>
                  <div class="panel-footer">
                    {{ $juice->jugo }}

                    <a href="{{route('admin.jugos.show', $juice->id)}}" class="btn btn-default btn-xs pull-right " data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver"> <span class="fa fa-eye fa-2x"></span> </a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>


  @endsection
