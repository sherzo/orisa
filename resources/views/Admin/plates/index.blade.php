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
    </div>
</div>
          <!--  CIERRE DEL ROW -->            
          <div class="row">
            @foreach($plates as $plate)
              <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="../img/plates/{{ $plate->image->imagen }}" alt="" class="img-responsive">
                  </div>
                  <div class="panel-footer">
                    {{ $plate->plato }}
                    
                    <a href="#" class="btn btn-default btn-xs pull-right "> <span class="fa fa-trash-o fa-2x"></span> </a> &nbsp;&nbsp;
                
                    <a href="#" class="btn btn-default btn-xs pull-right "> <span class="fa fa-pencil fa-2x"></span> </a>
                  </div>
                </div>
              </div>
<!--               <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="../img/plates/{{ $plate->image->nombre }}" >
                  <div class="caption">
                    <h4>{{ $plate->plato }}</h4>
                    
                    <p>
                      <a href="#" class="btn btn-default btn-xs" role="button"><span class="fa fa-pencil fa-2x"></span></a>

                      <a href="#" class="btn btn-danger btn-xs pull-right" role="button"><span class="fa fa-trash-o fa-2x"></span></a>
                    </p>
                  </div>
                </div>
              </div> -->
            @endforeach
          </div>
    


  @endsection