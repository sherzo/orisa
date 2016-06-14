@include('flash::message')
						<div class="form-group">
							{!! Form::label('muestra', 'Rif') !!}
                          
								{!! Form::text('muestra', $valor, ['class' => 'form-control', 'title' => 'Ingrese su nombre', 'disabled']) !!}
							
						
						</div>
   						<input type="hidden" name="rif" value="{{ $valor }}">

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
					
