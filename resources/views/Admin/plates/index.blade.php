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
            <li class="active">Platos</li>
        </ol>
        
    </div>

    <div class="col-lg-4">
        <a  href="{{ url('admin/platos/create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Nuevo Plato"">
            <span class="fa fa-plus"></span>
        </a>
    </div><br>
</div>
                   
          <div class="row">
            @foreach($plates as $plate)
              <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="../img/plates/{{ $plate->image->imagen }}" alt="" class="img-responsive">
                  </div>
                  <div class="panel-footer">
                    {{ $plate->plato }}
                    
                    <!-- <a href="#" class="btn btn-default btn-xs pull-right "> <span class="fa fa-pencil fa-2x"></span> </a> &nbsp;&nbsp; -->
                
                    <!-- <a href="{{route('admin.platos.show', $plate->id)}}" class="btn btn-default btn-xs pull-right "> <span class="fa fa-eye fa-2x"></span> </a> -->
                  </div>
                </div>
              </div>
            @endforeach
          </div>
    

  @endsection