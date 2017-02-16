<div class="text-center">
	<div class="form-group">
		<div class="input-group">
			<div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
				{!! Form::select('literal', ['V-' => 'V', 'E-' => 'E'], null, ['title' => 'Seleccione la nacionalidad','class' => 'form-control']) !!}


				{!! Form::text('cedula', null, ['class' => 'form-control', 'title' => 'Introduzca aquí en número de cédula del cliente.', 'placeholder' => 'Ej. 25607792', 'id' => 'cedula']) !!}

				<span class="input-group-btn">
					<button type="submit" class="btn btn-default" id="buscar" title="Buscar" data-toggle="tooltip">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>

				@if ($errors->has('rif'))
					<span class="help-block">
						<small>{{ $errors->first('rif') }}</small>
					</span>
				@endif

			</div>
		</div>
	</div>
</div>
