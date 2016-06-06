@extends('layout.layoutAdmin')

@section('contenido')

 <!-- Page Content -->

    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                   <li class="active">Usuarios</li>
     
            </ol>
                  
                <h4 class="page-header">LISTA DE USUARIOS</h4>

          </div>
                <div class="col-lg-4">
                       <a  href="{{ url('admin/usuarios/create') }}" class="btn btn-primary">
                        <span class="fa fa-plus"></span> Nuevo
                        </a>
                </div>  
          </div>
          <!--  CIERRE DEL ROW -->

                <div class="row"><br>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <p>Existen {{ $users->total() }} usuarios registrados</p>
                        
                          @include('admin.users.partials.table')

                            {!! $users->render() !!}
                        </div>
                    </div>
               </div>
    </div>
  </div>

  @endsection