@extends('layouts.app')

@section('contenido')

 <!-- Page Content -->
        <div class="row">
           <div class="col-lg-12">
             <ol class="breadcrumb">
                <li class="active">Usuarios</li>
            </ol>
                  
            <h4 class="page-header">LISTA DE USUARIOS</h4>
              
            {!! Form::open(['route' => 'admin.usuarios.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right']) !!}
  

                 <div class="input-group"> 
                    <input type="text" class="form-control" placeholder="Buscar usuario" name="name">
                      <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                              <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                 </div>
            {!! Form::close() !!}
            
            
            <a  href="{{ url('admin/usuarios/create') }}" class="btn btn-primary">
              <span class="fa fa-plus"></span> Nuevo
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
  </div>

  @endsection