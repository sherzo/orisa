@extends('layouts.app')

@section('contenido')

<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
            	<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="{{ route('admin.sauces.index') }}">Salsas</a></li>
                <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>
	
	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Registro de Salsas</div>
					<div class="panel-body">
					
						{!! Form::open(['route' => 'admin.sauces.store', 'method' => 'POST', 'id' => 'form_salsa']) !!}

							@include('admin.sauces.partials.field')

						{!! Form::close() !!}

					</div>
        	</div>
		</div>
	</div>


@endsection