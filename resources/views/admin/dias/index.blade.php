@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-12"><br><br>
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{url ('admin/planificaciones')}}">Planificación</a></li>
            <li class="active">Días</li>
        </ol>
        <h5 class="page-header">DÍAS DE PLANIFICACIÓN</h5>
    </div>
	{!! Form::open(['route' => 'admin.planificaciones.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right']) !!}
		<div class="input-group"> 
			<input type="text" class="form-control" placeholder="Buscar" name="name">
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
		</div>
	{!! Form::close() !!}

	<div class="col-lg-12">
		@include('flash::message')	
	</div>
	<div class="col-lg-12">
		@include('admin.dias.partials.table') {{ $dias->render() }}             
	</div>
</div>
@endsection