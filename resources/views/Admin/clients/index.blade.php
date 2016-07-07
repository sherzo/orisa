@extends('layout.layoutAdmin')

@section('contenido')

 <!-- Page Content -->

        <div class="row">
           <div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li class="active">Clientes</li>
            </ol>
                <h4 class="page-header">Lista de Clientes</h4>

          </div>
                <div class="col-lg-4">
                       <a  href="{{ url('admin/clientes/create') }}" class="btn btn-primary">
                        <span class="fa fa-plus"></span> Nuevo
                        </a>
                </div> 

          
          </div>
          <!--  CIERRE DEL ROW -->

                <div class="row"><br>


                    <div class="col-lg-12">
                    @include('flash::message')
                      <div class="table-responsive">
                        <!-- <p class="text-muted">Existen  proveedores registrados</p> -->
                        
                          @include('admin.clients.partials.table')

                            
                        </div>
                    </div>
                    </div>
               </div>
    </div>


  @endsection