@extends('layout.layoutAdmin')

@section('contenido')


    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12"><br>
             <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
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

                    </div>
               </div>
    </div>
  </div>

  @endsection