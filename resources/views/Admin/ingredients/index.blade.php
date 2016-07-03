@extends('layout.layoutAdmin')

@section('contenido')

<div class="row">         
                
            <div class="col-lg-12">
               <ol class="breadcrumb">
                  <li><a href="{{ url('admin')}} "><span class="glyphicon glyphicon-home"></span></a></li>
                  <li class="active">Ingredientes</li>
              </ol>
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
                        <p class="text-muted">Existen {{ $ingredients->total() }} ingredientes registrados</p>
                        
                            @include('admin.ingredients.partials.table')

                            {!! $ingredients->render() !!}
                        </div>
                    </div>
         </div>
</div>


  @endsection