@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active"> Deducciones</li>
            <li>Editar</li>
        </ol>
    </div>
</div>
<div><br>
	@include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12"><br>
        <div class="panel panel-default">
            <div class="panel-heading">
                Deducción: {{ $deduction->id }}
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="row">
                        {!! Form::model($deduction, ['route' => ['admin.deducciones.update', $deduction->id], 'method' => 'PUT']) !!}
                            @include('admin.deductions.partials.fields')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>                
    </div>
</div>

@endsection