@extends('layouts.app')

@section('contenido')


 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                  <li><a href="{{ route('admin.ingredientes.index') }}">Ingredientes</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Registro de Ingrediente</div>
					<div class="panel-body">

					<!--  PANEL DE ERRORES -->
						@include('admin.partial.errors')


						{!! Form::open(['route' => 'admin.ingredientes.store', 'method' => 'POST']) !!}
						
						<div class="form-group">
							{!! Form::label('nombre_ingrediente', 'Nombre del ingrediente') !!}
                            
								{!! Form::text('ingrediente', null, ['class' => 'form-control', 'placeholder' => 'Harina pan', 'title' => 'Ingrese el ingrediente']) !!}
						</div>

						<div class="form-group">
						    {!! Form::label('id_type', 'Tipo de ingrediente') !!}

							{!! Form::select('id_type', $ingredients_types, null, ['class' => 'form-control']);
							!!}
						</div>
						
						<div class="form-group">
						    {!! Form::label('id_unit', 'Unidad de medida') !!}

							{!! Form::select('id_unit', $units, null, ['class' => 'form-control']);
							!!}
						</div>
						
						<div class="form-group">
							{!! Form::label('caracteristica', 'Caracteristica del ingrediente') !!}
                            
								{!! Form::text('caracteristica', null, ['class' => 'form-control', 'placeholder' => 'precocida', 'title' => 'Ingrese alguna caracteristica del alimento']) !!}  
						</div>

						<div class="form-group">
							{!! Form::label('id_providers', 'Seleciones los proveedores del ingrediente') !!}
						
						<br>
							{!! Form::select('id_providers[]', $providers, null, ['class' => 'form-control select-providers form-control', 'multiple']) !!}
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

@section('js')
<script>
$('.select-providers').chosen({
      placeholder_text_multiple: 'Selecione los proveedores',
      no_results_text: 'No se encontro al proveedor'
    });
</script>
@endsection