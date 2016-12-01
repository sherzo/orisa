@extends('layouts.app')

@section('contenido')
<!-- ./row -->

<div class="row">
		<div class="col-lg-12">
				<h5 class="page-header"></h5>
		</div>
		<div class="col-lg-12">
				<ol class="breadcrumb">
						<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
						<li class="active">Editar privilegios </li>
				</ol>
		</div>
</div>
    	<div class="col-md-12"><h4>Panel de Privilegios <small>Usuario: {{ $user->name }}</small></h4>
    	</div>
    </div>
    <div class="row">
<!--     	<div class="col-lg-12"><div class="alert alert-info" role="alert">
          			Agregue o quite provilegios al usuario
          		</div></div> -->
          		<div class="col-lg-12">
          		        @include('flash::message')
				</div>
    </div>
{!! Form::model($user, array('route' => array('admin.privilegios.update', $user->id), 'method' => 'PUT')) !!}
<!-- <div class="row">
	<div class="col-md-12">
	<hr>
		<div class="form-group">
			<label>Segun el Rol</label>
			<select class="form-control">
				<option>Root</option>
				<option>Admin</option>
				<option>Encargado</option>
			</select>
			<p class="help-block text-info">Al seleccionar algun rol se moveran los provilegios</p>
		</div>
	</div>
</div>
 -->

<div class="row"><br>
@foreach($modules as $llave => $modulo)

	<div class="col-md-3">
		<div class="list-group">
		 	<li class="list-group-item active">
		    	<h4 class="list-group-item-heading">
		    	<input type="checkbox" name="module[]" id="{{ $modulo->modulo }}" class="marcar-modulo"> {{ $modulo->modulo }}</h4>
		  	</li>
		  	<li class="list-group-item">
		  	@foreach($modules_actions as $modulo_accion)
			  	@if($modulo_accion->modulo->id == $modulo->id)
					<div class="checkbox">
						<label>
							<input type="checkbox" name="privileges[]" class="{{ $modulo->modulo }}" value="{{ $modulo_accion->id }}"
							@foreach($user->modules_actions as $key => $value)

							@if($value->module_action_id == $modulo_accion->id)
								checked="true"
							@endif

							@endforeach
							>{{ $modulo_accion->accion->accion }}
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
			<button class="btn btn-danger btn-sm"><span class="fa fa-trash fa-2x"></span></button>
			<button class="btn btn-success btn-sm"><span class="fa fa-save fa-2x"></span></button>
		</center>
	</div>
</div>
{!! Form::close() !!}
@endsection

@section('js')
<script>
	$(document).ready(function() {

	$(".marcar-modulo").change(function () {
    if ($(this).is(':checked')) {

        var modulo = $(this).attr('id');
    	$('.'+modulo).prop('checked', true);

    }else {

    	var modulo = $(this).attr('id');
    	$('.'+modulo).prop('checked', false);

    }
});

});
</script>
@endsection
