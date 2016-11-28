<div class="checkbox form-group">
    <label>
      <input type="checkbox" id="empleado"> Empleado
    </label>
  </div>
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} nombre">
							{!! Form::label('name', 'Nombre') !!}

							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Saul', 'title' => 'Ingrese su nombre']) !!}

							@if($errors->has('name'))
                                   	<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
						</div>
						<div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
							{!! Form::label('user', 'Usuario') !!}

							{!! Form::text('user', null, ['class' => 'form-control', 'placeholder' => 'Sherzo', 'title' => 'Ingrese su usuario']) !!}

							@if ($errors->has('user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                             @endif
						</div>
						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							{!! Form::label('password', 'Contraseña') !!}

							{!! Form::password('password', ['class' => 'form-control awesome', 'title' => 'Ingrese su contraseña']) !!}

							@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                             @endif
						</div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							{!! Form::label('email', 'Correo Electronico') !!}

							{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com']) !!}
						@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						</div>

						<div class="form-group">
						    {!! Form::label('type', 'Tipo de usuario') !!}

							{!! Form::select('type', array('2' => 'Administrador(a)', '3' => 'Encargado(a)', '4' => 'Chef', '5' => 'Cajero(a)', '6' => 'Mesonero(a)', '7' => 'Cliente'), null, ['class' => 'form-control']);
							!!}
						</div>
