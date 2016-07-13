
						<div class="form-group">
							{!! Form::label('cedula', 'Cedula') !!}
                          
							{!! Form::text('cedula', null, ['class' => 'form-control', 'title' => 'Cedula del cliente', 'disabled']) !!}
							
						
						</div>

						<div class="form-group">
							{!! Form::label('nombre', 'Nombre') !!} 

							{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' =>
							'Saul Florez', 'title' => 'Ingrese el nombre']) !!}
						</div>
						
						<div class="form-group">
							{!! Form::label('direccion', 'Dirección') !!} 
							
						
						{!! Form::textarea('direccion', null, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Calle 4 de marzo #30-11']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('telefono', 'Numero de telefono') !!}
							
							{!! Form::text('telefono', null, ['class' => 'form-control awesome', 'placeholder' => ' 04145897451', 'title' => 'Ingrese su contraseña']) !!}
							
						</div>
						<div class="form-group"> 
							{!! Form::label('correo', 'Correo Electronico') !!}
							
							{!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com']) !!}
						</div>
					
			<div class="form-group">
                		<br>
                		<center>
							<button type="reset" class="btn btn-primary btn-sm" title="Restrablecer">
						<span class="fa fa-refresh fa-2x"></span>
							</button>
					<button type="submit" class="btn btn-success btn-sm" title="Guardar">
						<span class="fa fa-save fa-2x"></span>
					</button>
                </center>
                </div> 