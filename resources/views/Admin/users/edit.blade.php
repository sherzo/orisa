@extends('layout.layoutAdminTres')

@section('contenido')


 	<!-- ./row -->
 	<div class="row">
		<div class="col-lg-12"><br>
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
				<div class="panel-heading">Editar usuario: <span class="muted">{{ $user->name }}</span></div>
					<div class="panel-body">
					    {{ Form::model($user, array('route' => array('admin.usuarios.update', $user->id), 'method' => 'PUT')) }}
						
						
						@include('admin.users.partials.fields')

						<button class="btn btn-primary">Actualzar</button>

						{!! Form::close() !!}


					</div>
        	</div>
		</div>
	</div>
</div>
@endsection