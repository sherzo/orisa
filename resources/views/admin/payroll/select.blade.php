@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Prenómina</li>
			<li class="active">Quincena</li>
		</ol>
	</div>
</div>
<br>
<div>
    @include('flash::message')
</div>
{!! Form::open(['route' => 'admin.nomina.create', 'method' => 'GET']) !!} {{ csrf_field() }}

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
		            <em>Busqueda de quincena</em>
		        </div>
		        <div class="panel-body">
		        	<div class="col-lg-4">
		        		<div class="form-group"> Año <small class="text-danger">*</small></div>
						<div class="form-group{{ $errors->has('año') ? ' has-error' : '' }}">
							{!! Form::select('año', array(
								'2016' => '2016', 
								'2017' => '2017',
								'2018' => '2018',
								'2019' => '2019',
								'2020' => '2020'), null, 
							['placeholder' => '', 'class' => 'form-control', 'placeholder' => 'Seleccione', 'title' => 'Año']) !!}

							@if ($errors->has('año'))
				                <span class="help-block">
				                    <small>{{ $errors->first('año') }}</small>
				                </span>
				            @endif
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group"> Mes <small class="text-danger">*</small></div>
						<div class="form-group{{ $errors->has('mes') ? ' has-error' : '' }}">
							{!! Form::select('mes', array(
								'01' => 'Enero', 
								'02' => 'Febrero',
								'03' => 'Marzo',
								'04' => 'Abril',
								'05' => 'Mayo',
								'06' => 'Junio',
								'07' => 'Julio',
								'08' => 'Agosto',
								'09' => 'Septiembre',
								'10' => 'Octubre',
								'11' => 'Noviembre',
								'12' => 'Diciembre'), null, 
							['placeholder' => '', 'class' => 'form-control', 'placeholder' => 'Seleccione','title' => 'Mes']) !!}

							@if ($errors->has('mes'))
				                <span class="help-block">
				                    <small>{{ $errors->first('mes') }}</small>
				                </span>
				            @endif
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group"> Quincena <small class="text-danger">*</small></div>
						<div class="form-group{{ $errors->has('quincena') ? ' has-error' : '' }}">
							{!! Form::select('quincena', array(
								'1' => '1', 
								'2' => '2'), null, 
							['placeholder' => '', 'class' => 'form-control', 'placeholder' => 'Seleccione', 'title' => 'Quincena']) !!}
							
							@if ($errors->has('quincena'))
				                <span class="help-block">
				                    <small>{{ $errors->first('quincena') }}</small>
				                </span>
				            @endif
						</div>
					</div>
					<div class="col-lg-12">
						<hr>	
					</div>
					<div class="form-group tooltip-demo text-right">
						<button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Siguiente"><span class="glyphicon glyphicon-circle-arrow-right"></span></button>
					</div> 
		        </div>
		    </div>
		</div>
	</div>

{!! Form::close() !!}

@endsection