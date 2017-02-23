@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active"> Planificaciónes</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
     	<a href="{{ url('admin/planificaciones/administrar/dias/turnos/seleccionar-planificacion') }}"><button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button></a>

        <a href="{{ url('admin/planificaciones/administrar/dias/turnos/ver-planificacion ') }}"><button type="button" class="btn btn-primary"><span class="fa fa-list-ul"></span></button></a>
    </div>
</div>
<div><br>
	@include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12"><br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <em>Listado de planificaciones por empleado</em>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    @include('admin.turnos.partials.table')
                </div>
            </div>
        </div>                
    </div>
</div>

<script type="text/javascript">

    function planificacion(planificacion, empleado){
        $('#planificacion').val(planificacion);
        $('#empleado').val(empleado);
    }

</script>

@endsection