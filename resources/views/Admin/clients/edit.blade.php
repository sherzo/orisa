@extends('layout.layoutAdminTres')

@section('contenido')

<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
          
		        <li><a href="{{ route('admin.clientes.index') }}">Clientes</a></li>
                    <li class="active">Editar</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Editar cliente: <strong>{{ $client->nombre }}</strong></div>
					<div class="panel-body">		
						@include('flash::message')
						
						@include('admin.partial.errors')
						

						{{ Form::model($client, array('route' => array('admin.clientes.update', $client->id), 'method' => 'PUT')) }}
						

						@include('admin.clients.partials.form-edit')
					</div>
			</div>
		</div>
	</div>

@endsection