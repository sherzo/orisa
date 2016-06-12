
						<div class="form-group">
							{!! Form::label('rif', 'Rif') !!}
                            <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon">J -</span>
								{!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Ingrese su nombre']) !!}
							
							</div>
						</div>
   
						<div class="form-group">
							{!! Form::label('business_name', 'Razón social') !!} 

							{!! Form::text('business_name', null, ['class' => 'form-control', 'placeholder' =>
							'Ej: Sefardi C.A', 'title' => 'Ingrese la razon social']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::label('addres_pro', 'Dirección fiscal') !!} 
							
							<textarea name="addres_pro" class="form-control" placeholder="Ej: Calle 5 de marzo 30-11"></textarea>
						</div>
						<div class="form-group">
							{!! Form::label('phone_pro', 'Numero de telefono') !!}
							
							{!! Form::text('phone_pro', null, ['class' => 'form-control awesome', 'placeholder' => 'Ej: 04145897451', 'title' => 'Ingrese su contraseña']) !!}
							
						</div>
						<div class="form-group"> 
							{!! Form::label('email_pro', 'Correo Electronico') !!}
							
							{!! Form::text('email_pro', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com']) !!}
						</div>
					
