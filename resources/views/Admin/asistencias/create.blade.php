@extends('layouts.app')

@section('contenido')

<div class="row">
		<div class="col-lg-12">
				<h5 class="page-header"></h5>
		</div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ route('admin.asistencias.index') }}">Asistencias </a></li>
            <li>Crear</li>
        </ol>
    </div>
</div>
<div><br>
    @include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Fecha: {{ $fecha }}
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    {!! Form::open(['route' => 'admin.asistencias.store', 'method' => 'POST', 'name' => 'form']) !!}
                        {{ csrf_field() }} @include('admin.asistencias.partials.fields')   
                    {!! Form::close() !!} 
                </div>
            </div>
        </div>                
    </div>
</div>
@endsection