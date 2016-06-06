@extends('layout.layoutAdminTres')

@section('contenido')


 	<!-- ./row -->
 	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                  <li><a href="#">Usuarios</a></li>
                    <li class="active">Editar</li>
            </ol>
    	</div>
    </div>
    <!-- /row -->
	<div class="row">

		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Provedor: <span class="muted">{{ $provider->bussines_name }}</span></div>
					<div class="panel-body">
					    {{ Form::model($provider, array('route' => array('admin.proveedores.update', $provider->id), 'method' => 'PUT')) }}
						
						
						@include('admin.providers.partials.fields')

						<button class="btn btn-primary">Actualzar</button>

						{!! Form::close() !!}


					</div>
        	</div>
		</div>
	</div>
</div>
@endsection