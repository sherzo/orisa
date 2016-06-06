@extends('layout.layoutAdminDos')

@section('contenido')

 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                  <li><a href="{{ route('admin.usuarios.index') }}">Licores</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Registro de Licores</div>
					<div class="panel-body">		
					

					<!-- PANEL DE ERRORESS -->

					 	@if (count($errors) > 0)
    						<div class="alert alert-danger">
        						<ul>
           							@foreach ($errors->all() as $error)
                						<li>{{ $error }}</li>
            						@endforeach
        						</ul>
    						</div>
						@endif

						{!! Form::open(['route' => 'admin.licores.store', 'method' => 'POST']) !!}
						
						<div class="form-group">
							{!! Form::label('liqueur_name', 'Nombre del Licor') !!}
                            
								{!! Form::text('liqueur_name', null, ['class' => 'form-control', 'placeholder' => 'Ej: Santateresa, Carta Roja', 'title' => 'Ingrese su nombre']) !!}
						</div>
						
						<div class="form-group">
						    {!! Form::label('id_type', 'Tipo de licor') !!}

							{!! Form::select('id_type', $liqueurs_types, null, ['class' => 'form-control']);
							!!}
						</div>

						<div class="form-group">
						    {!! Form::label('id_unit', 'Unidad de medida') !!}

							{!! Form::select('id_unit', $units, null, ['class' => 'form-control']);
							!!}
						</div>
						<input type="hidden" name="id_user" value="1">
						<div class="form-group">
							{!! Form::label('id_providers', 'Seleciones los proveedores del licor') !!}
						
						<br>
							@foreach ($providers as $id => $provider)
								
  									<label class="checkbox-inline">
    									<input type="checkbox" name="id_providers[]" value="{{ $id }}">
                               				{{ $provider }}
 							 		 </label>
								
						   @endforeach
						
						</div>

						<button class="btn btn-default"><span class="fa fa-save fa-2x"></span></button>

						{!! Form::close() !!}
					</div>
        	</div>
		</div>
	</div>
</div>
@endsection