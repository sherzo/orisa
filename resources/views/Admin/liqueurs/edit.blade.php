@extends('layout.layoutAdminTres')

@section('contenido')


 	<!-- ./row -->
 	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="#">Usuarios</a></li>
                    <li class="active">Editar</li>
            </ol>
    	</div>
    </div>
    <!-- /row -->
	<div class="row">

		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Editar usuario: <span class="muted">{{ $liqueur->liqueur_name }}</span></div>
					<div class="panel-body">				
					<!-- PANEL DE ERRORES -->
						
						@include('admin.partial.errors')


						 {{ Form::model($liqueur, array('route' => array('admin.licores.update', $liqueur->id), 'method' => 'PUT')) }}
						
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