@extends('layouts.app')

@section('contenido')



        <div class="row">
           <div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li class="active">Licores</li>

            </ol>                  
                <h4 class="page-header">Lista de Licores</h4>

          </div>
                <div class="col-lg-4">
                       <a  href="{{ url('admin/licores/create') }}" class="btn btn-primary">
                        <span class="fa fa-plus"></span> Nuevo
                        </a>
                </div>  
          </div>
          <!--  CIERRE DEL ROW -->

                <div class="row"><br>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <p class="text-muted">Existen {{ $liqueurs->total() }} licores registrados</p>
                        
                            @include('admin.liqueurs.partials.table')

                            {!! $liqueurs->render() !!}
                        </div>
                    </div>   
                </div>
           </div>
          <!-- CIERRA WRAPER -->
  @endsection