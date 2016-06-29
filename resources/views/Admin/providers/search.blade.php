@extends('layout.layoutAdminDos')

@section('contenido')


 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="{{ route('admin.proveedores.index') }}">Proveedores</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Registro de proveedores</div>
					<div class="panel-body">

						@include('admin.partial.errors')


						{!! Form::open(['route' => 'admin.proveedores.store', 'method' => 'POST']) !!}
					 	
						@include('admin.providers.partials.fields1')

						

						{!! Form::close() !!}


					</div>
        	</div>
		</div>
	</div>
</div>
@endsection