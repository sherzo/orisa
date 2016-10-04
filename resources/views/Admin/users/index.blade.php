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
            <li class="active">Usuarios</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <a  href="{{ url('admin/usuarios/create') }}" class="btn btn-primary">
            <span class="fa fa-plus"></span>
        </a>
    </div>
</div>
          <!--  CIERRE DEL ROW -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <p>Existen {{ $users->total() }} usuarios registrados</p>
                        
                          @include('admin.users.partials.table')

                            {!! $users->render() !!}
                        </div>
                    </div>
               </div>
    </div>


  @endsection