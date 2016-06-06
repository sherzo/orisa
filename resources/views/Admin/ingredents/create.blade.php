@extends('layout.layoutAdminDos')

@section('contenido')


 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                  <li><a href="{{ route('admin.usuarios.index') }}">Ingredientes</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Registro de Ingrediente</div>
					<div class="panel-body">
						{!! Form::open(['route' => 'admin.ingredientes.store', 'method' => 'POST']) !!}
						
						<div class="form-group">
							{!! Form::label('ingredent_name', 'Nombre del ingrediente') !!}
                            
								{!! Form::text('ingredent_name', null, ['class' => 'form-control', 'placeholder' => 'Ej: Arroz blanco', 'title' => 'Ingrese el ingrediente']) !!}
						</div>
						
						<div class="form-group">
						    {!! Form::label('id_unit', 'Unidad de medida') !!}

							{!! Form::select('id_unit', $units, null, ['class' => 'form-control']);
							!!}
						</div>
						
						<input type="hidden" name="id_user" value="1">

						<div class="form-group">
							{!! Form::label('id_providers', 'Seleciones los proveedores del ingrediente') !!}
						
						<br>
							@foreach ($providers as $id => $provider)
								<div class="checkbox">
  									<label>
    									<input type="checkbox" name="id_providers[]" value="{{ $id }}">
                               				{{ $provider }}
 							 		 </label>
								</div>
						   @endforeach
						
						</div>

						<button class="btn btn-default">
							<span class="fa fa-save fa-2x"></span>
						</button>

						{!! Form::close() !!}
					</div>
        	</div>
		</div>
	</div>
</div>
@endsection