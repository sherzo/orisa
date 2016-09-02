<div class="text-center">
	{!! Form::open(['route' => 'admin.empleados.create', 'method' => 'GET', 'class' => 'form-inline']) !!}   
		<div class="form-group">
			<div class="input-group">
				<div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
					<select class="form-control" name="nationality" title="Seleccioné la nacionalidad" id="nationality">
						<option value="V">V</option>
						<option value="E">E</option>
					</select>           

					{!! Form::text('cedula', null, ['class' => 'form-control', 'title' => 'Ingrese el número de cédula del empleado.', 'placeholder' => '25607932', 'id' => 'document_em', 'required']) !!}

					<span class="input-group-btn">
						<button type="submit" class="btn btn-default" id="buscar" title="Buscar">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
					
					@if ($errors->has('cedula'))
						<span class="help-block">
							<small>{{ $errors->first('cedula') }}</small>
						</span>
					@endif
				   
				</div>
			</div>
		</div>
	{!! Form::close() !!}	
</div>
