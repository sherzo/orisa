@extends('layout.layoutAdminDos')

@section('contenido')


 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12"><br>
             <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                  <li><a href="#">Usuarios</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Registro de usuario</div>
					<div class="panel-body">
						{!! Form::open(['route' => 'admin.usuarios.store', 'method' => 'POST']) !!}
						
						@include('admin.users.partials.fields')

						<button class="btn btn-default"><span class="fa fa-save fa-2x"></span></button>

						{!! Form::close() !!}


					</div>
        	</div>
		</div>
	</div>
</div>
@endsection