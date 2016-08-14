@extends('layouts.app')

@section('contenido')

 <!-- Page Content -->

        <div class="row">
           <div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li class="active">Provedores</li>
            </ol>
                <h4 class="page-header">Lista de Proveedores</h4>

          </div>
                <div class="col-lg-4">
                       <a  href="{{ url('admin/proveedores/create') }}" class="btn btn-primary">
                        <span class="fa fa-plus"></span> Nuevo
                        </a>
                </div> 

          
          </div>
          <!--  CIERRE DEL ROW -->

                <div class="row"><br>


                    <div class="col-lg-12">
                <!--    @include('flash::message') -->
                      <div class="table-responsive">
                        <p class="text-muted">Existen {{ $providers->total() }} proveedores registrados</p>
                        
                          @include('admin.providers.partials.table')

                            {!! $providers->render() !!}
                        </div>
                    </div>
                    </div>
               </div>
    </div>


  @endsection