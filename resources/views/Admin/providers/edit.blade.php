@extends('layout.layoutAdminTres')

@section('contenido')


 	<!-- ./row -->
 	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="#">Proveedores</a></li>
                    <li class="active">Editar</li>
            </ol>
    	</div>
    </div>
    <!-- /row -->
	<div class="row">

		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Provedor: <strong>{{ $provider->razon_social }} </strong></div>
					<div class="panel-body">

						@include('admin.partial.errors')


					    {{ Form::model($provider, array('route' => array('admin.proveedores.update', $provider->id), 'method' => 'PUT')) }}
						
						
						
						<div class="form-group">
							{!! Form::label('rif', 'Rif') !!}
                            <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon">J -</span>
								{!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Ingrese su nombre', 'disabled' => 'disabled']) !!}
							
							</div>
						</div>
   
						<div class="form-group">
							{!! Form::label('razon_social', 'Razón social') !!} 

							{!! Form::text('razon_social', null, ['class' => 'form-control', 'placeholder' =>
							'Ej: Sefardi C.A', 'title' => 'Ingrese la razon social']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::label('direccion', 'Dirección fiscal') !!} 
							
							<textarea name="direccion" class="form-control" placeholder="Ej: Calle 5 de marzo 30-11"></textarea>
						</div>
						<div class="form-group">
							{!! Form::label('telefono', 'Numero de telefono') !!}
							
							{!! Form::text('telefono', null, ['class' => 'form-control awesome', 'placeholder' => 'Ej: 04145897451', 'title' => 'Ingrese su contraseña']) !!}
							
						</div>
						<div class="form-group"> 
							{!! Form::label('correo', 'Correo Electronico') !!}
							
							{!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com']) !!}
						</div>
					


						<div class="form-group">
                			<br/>
             			 	<center>
								<button type="reset" class="btn btn-primary btn-sm" title="Restablecer">
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