@extends('layouts.app')

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
				<div class="panel-heading">Editar licor: <strong>{{ $liqueur->nombre_licor }}</strong></div>
					<div class="panel-body">				
					<!-- PANEL DE ERRORES -->
						
						@include('admin.partial.errors')


						 {{ Form::model($liqueur, array('route' => array('admin.licores.update', $liqueur->id), 'method' => 'PUT')) }}
						
						<div class="form-group">
							{!! Form::label('nombre_licor', 'Nombre del Licor') !!}
                            
								{!! Form::text('nombre_licor', null, ['class' => 'form-control', 'placeholder' => 'Ej: Santateresa, Carta Roja', 'title' => 'Ingrese su nombre']) !!}
						</div>
						
						<div class="form-group">
						    {!! Form::label('tlicor_id', 'Tipo de licor') !!}

							{!! Form::select('tlicor_id', $liqueurs_types, null, ['class' => 'form-control']);
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