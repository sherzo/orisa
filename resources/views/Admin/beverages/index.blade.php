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
            <li class="active">Bebidas alcoholicas</li>
        </ol>
    </div>

    <div class="col-lg-4">
        <a  href="{{ url('admin/tragos/create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Nueva Bebida alcoholica"">
            <span class="fa fa-plus"></span>
        </a>
    </div><br>
</div>
          <!--  CIERRE DEL ROW -->            
          <div class="row">
            @foreach($beverages as $beverage)
              <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="../img/tragos/{{ $beverage->imag->imagen }}" alt="" class="img-responsive">

                  </div>
                  <div class="panel-footer">
                    {{ $beverage->trago }}
                    
                    <!-- <a href="#" class="btn btn-default btn-xs pull-right "> <span class="fa fa-trash-o fa-2x"></span> </a> &nbsp;&nbsp; -->
                    

                    <a href="{{ route('admin.tragos.edit', $beverage->id) }}" class="btn btn-default btn-xs pull-right "> <span class="fa fa-pencil fa-2x"></span> </a>
                    
                    <a href="#" class="btn btn-default btn-xs pull-right "> <span class="fa fa-eye fa-2x"></span> </a>

                  </div>
                </div>
              </div>
            @endforeach
          </div>
  @endsection