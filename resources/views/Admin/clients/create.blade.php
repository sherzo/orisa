@extends('layouts.app')

@section('contenido')


 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="{{ route('admin.clientes.index') }}">Clientes</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Registro de clientes</div>
					<div class="panel-body">

						@include('admin.partial.errors')


						{!! Form::open(['route' => 'admin.clientes.store', 'method' => 'POST']) !!}
					 	
						@include('admin.clients.partials.fields')

						

						{!! Form::close() !!}


					</div>
        	</div>
		</div>
	</div>
</div>
@endsection