@extends('layouts.app')

@section('contenido')

 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
          
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
					
						@include('admin.partial.errors')

						{!! Form::open(['route' => 'admin.licores.store', 'method' => 'POST']) !!}
						
						<div class="form-group">
							{!! Form::label('nombre_licor', 'Nombre del Licor') !!}
                            
								{!! Form::text('nombre licor', null, ['class' => 'form-control', 'placeholder' => 'Ej: Santateresa, Carta Roja', 'title' => 'Ingrese su nombre']) !!}
						</div>
						
						<div class="form-group">
						    {!! Form::label('id_type', 'Tipo de licor') !!}

							{!! Form::select('id_type', $liqueurs_types, null, ['class' => 'form-control']);
							!!}
						</div>

						<div class="form-group">
							{!! Form::label('caracteristica', 'Caracteristica del licor') !!}
                            
								{!! Form::text('caracteristica', null, ['class' => 'form-control', 'placeholder' => 'Ej: añejo', 'title' => 'Ingrese su nombre']) !!}
						</div>

						<div class="form-group">
						    {!! Form::label('id_unit', 'Unidad de medida') !!}

							{!! Form::select('id_unit', $units, null, ['class' => 'form-control']);
							!!}
						</div>

						<div class="form-group">
							{!! Form::label('id_providers', 'Seleciones los proveedores del licor') !!}
						
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

						<div class="form-group">
                			<br/>
                			<center>
								<button type="reset" class="btn btn-primary btn-sm" title="Restrablecer">
									<span class="fa fa-refresh fa-2x"></span>
								</button>
								<button class="btn btn-success btn-sm" title="Guardar">
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