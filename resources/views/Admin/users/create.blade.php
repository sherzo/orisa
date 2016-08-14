@extends('layouts.app')

@section('contenido')


 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
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

<div class="form-group">
                		<br/>
                <center>
					<button class="btn btn-primary btn-sm">
						<span class="fa fa-refresh fa-2x"></span>
					</button>
					<button class="btn btn-success btn-sm">
						<span class="fa fa-save fa-2x"></span>
					</button>
                </center>
                </div> 

						{!! Form::close() !!}


					</div>
        	</div>
		</div>
	</div>
</div>
@endsection