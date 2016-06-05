						<div class="form-group">
							{!! Form::label('name', 'Nombre') !!}

							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: Sherzo', 'title' => 'Ingrese su nombre']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('user', 'Usuario') !!} 

							{!! Form::text('user', null, ['class' => 'form-control', 'placeholder' =>
							'Usuario', 'title' => 'Ingrese su usuario']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('password', 'Contraseña') !!}

							{!! Form::password('password', ['class' => 'form-control awesome', 'placeholder' => 'Contraseña', 'title' => 'Ingrese su contraseña']) !!}
						</div>
						<div class="form-group"> 
							{!! Form::label('email', 'Correo Electronico') !!}
							
							{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com']) !!}
						</div>
						
						<div class="form-group">
						    {!! Form::label('type', 'Tipo de usuario') !!}

							{!! Form::select('type', array('admin' => 'Administrador', 'root' => 'root', 'mersonero' => 'Mesonero', 'cocinero' => 'Chef'), null, ['class' => 'form-control']);
							!!}
						</div>
