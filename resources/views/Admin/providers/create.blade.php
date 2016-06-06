@extends('layout.layoutAdminDos')

@section('contenido')


 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                  <li><a href="{{ route('admin.usuarios.index') }}">Porveedores</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Registro de proveedores</div>
					<div class="panel-body">
						{!! Form::open(['route' => 'admin.proveedores.store', 'method' => 'POST']) !!}
						
						@include('admin.providers.partials.fields')

						<button class="btn btn-default" type="submit"><span class="fa fa-save fa-2x"></span></button>

						{!! Form::close() !!}


					</div>
        	</div>
		</div>
	</div>
</div>
@endsection