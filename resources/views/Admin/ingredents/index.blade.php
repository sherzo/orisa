@extends('layout.layoutAdmin')

@section('contenido')

 <!-- Page Content -->

    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12"><br>
             @include('admin.partial.breadcumb')
                  
                <h4 class="page-header">Lista de Ingredientes</h4>

          </div>
                <div class="col-lg-4">
                       <a  href="{{ url('admin/ingredientes/create') }}" class="btn btn-primary">
                        <span class="fa fa-plus"></span> Nuevo
                        </a>
                </div>  
          </div>
          <!--  CIERRE DEL ROW -->

                <div class="row"><br>
                    <div class="col-lg-12">
                        <div class="table-responsive">

                        </div>
                    </div>
               </div>
    </div>
  </div>

  @endsection