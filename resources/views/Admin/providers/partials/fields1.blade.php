
						<div class="form-group">
							{!! Form::label('rif', 'Rif') !!}
                            <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon">J -</span>
								{!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Ingrese su nombre']) !!}
							
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
					
