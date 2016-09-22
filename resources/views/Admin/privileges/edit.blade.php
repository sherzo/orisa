@extends('layouts.app')

@section('contenido')
<!-- ./row -->

	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
          
		        <li><a href="{{ route('admin.usuarios.index') }}">Usuarios</a></li>
                    <li class="active">Editar provilegios</li>
            </ol>
    	</div>
    <div class="col-md-12"><h4>Panel de Privilegios</h4></div>
    </div>

<br>
{!! Form::model($user, array('route' => array('admin.privilegios.update', $user->id), 'method' => 'PUT')) !!}

<div class="row">
@foreach($modules as $llave => $modulo)

	<div class="col-md-3">
		<div class="list-group">
		 	<li class="list-group-item active">
		    	<h4 class="list-group-item-heading"><input type="checkbox" name="module[]"> {{ $modulo->modulo }}</h4>
		  	</li>
		  	<li class="list-group-item">
		  	@foreach($modules_actions as $modulo_accion)
			  	@if($modulo_accion->modulo->id == $modulo->id)		
					<div class="checkbox">
						<label>
							<input type="checkbox" name="privileges[]" value="{{ $modulo_accion->id }}">{{ $modulo_accion->accion->accion }}
						</label>
					</div>
				@endif
			@endforeach
			</li>
		</div>
	</div>

@endforeach
	<div class="col-md-12">
		<center>
			<button class="btn btn-success btn-sm"><span class="fa fa-save fa-2x"></span></button>
		</center>
	</div>
</div>
{!! Form::close() !!}
@endsection
