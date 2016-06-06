@extends('layout.layoutAdmin')

@section('contenido')

 <!-- Page Content -->

        <div class="row">
           <div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                  <li class="active">Provedores</li>
            </ol>
              @include('flash::message')
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
                      <div class="table-responsive">
                        <p>Existen {{ $providers->total() }} usuarios registrados</p>
                        
                          @include('admin.providers.partials.table')

                            {!! $providers->render() !!}
                        </div>
                    </div>
                    </div>
               </div>
    </div>


  @endsection