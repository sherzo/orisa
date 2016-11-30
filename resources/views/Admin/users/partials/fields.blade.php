
						<div class="form-group{{ $errors->has('employee') ? ' has-error' : '' }} nombre">
							{!! Form::label('employee', 'Empleado') !!}

              {!! Form::select('employee', $empleados, null, ['class' => 'form-control'])!!}
							@if($errors->has('employee'))
               	<span class="help-block">
                    <strong>{{ $errors->first('employee') }}</strong>
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
						    {!! Form::label('roles_id', 'Tipo de usuario') !!}

							{!! Form::select('roles_id', array('2' => 'Administrador(a)', '3' => 'Encargado(a)', '4' => 'Cocinero(a)', '5' => 'Cajero(a)', '6' => 'Mesonero(a)'), null, ['class' => 'form-control']);
							!!}
						</div>

            <div class="form-group tooltip-demo text-center">
          		<button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
          		<button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
          	    <br>
          	</div>
