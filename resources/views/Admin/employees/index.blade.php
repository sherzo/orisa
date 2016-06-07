@extends('layout.layoutAdmin')

@section('employee_content')

        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                 <li><a href="#">Inicio</a></li>
                 <li class="active">Empleados </li>
            </ol>
               <h3 class="page-header">LISTA DE EMPLEADOS</h3>
        </div>
                <!-- /.col-lg-12 -->
        <div class="col-lg-4">
            <a href="{{ url('admin/employees/create') }}">
            <button type="button" class="btn btn-primary">
            <span class="fa fa-plus"></span> Nuevo </button></a>
        </div>
        </div>
        <!-- /.row -->
              <div class="row"><br>
               
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos de Empleados
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                  @include('admin.employees.partials.table')
                                  {{ $employees->render() }}
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            </div>
@endsection
