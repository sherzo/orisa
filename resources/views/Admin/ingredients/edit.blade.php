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
				<div class="panel-heading">Editar ingrediente: <strong>{{ $ingredient->ingredient_name }}</strong>
				</div>
					<div class="panel-body">
					    {{ Form::model($ingredient, array('route' => array('admin.ingredientes.update', $ingredient->id), 'method' => 'PUT')) }}
						
						
					<!--  PANEL DE ERRORES -->
						@include('admin.partial.errors')


						{!! Form::open(['route' => 'admin.ingredientes.store', 'method' => 'POST']) !!}
						
						<div class="form-group">
							{!! Form::label('ingredient_name', 'Nombre del ingrediente') !!}
                            
								{!! Form::text('ingredient_name', null, ['class' => 'form-control', 'placeholder' => 'Ej: Arroz blanco', 'title' => 'Ingrese el ingrediente']) !!}
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
    									<input type="checkbox" name="id_providers[]" value="{{ $id }}"
    									>
                               				{{ $provider }}
 							 		 </label>
								</div>
						   @endforeach
						
						</div>
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