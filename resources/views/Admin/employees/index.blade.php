@extends('layout.layoutAdmin')

@section('employee_content')

        
        <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                 <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                 <li class="active">Empleados </li>
            </ol>
               <h4 class="page-header">LISTA DE EMPLEADOS</h4>
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
                   
                            <div class="dataTable_wrapper">
                                  @include('admin.employees.partials.table')
                                  {{ $employees->render() }}
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
           
            
@endsection
