<div class="text-center">
	{!! Form::open(['route' => 'admin.asistencias.create', 'method' => 'GET', 'class' => 'form-inline']) !!}   
		<div class="form-group">
			<div class="input-group">
				<div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
					{!! Form::date('fecha', null, ['class' => 'form-control', 'title' => 'Ingrese la fecha, para registrar asistencia.', 'placeholder' => '25607932', 'required']) !!}

					<span class="input-group-btn">
						<button type="submit" class="btn btn-default" id="buscar" title="Buscar">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
					
					@if ($errors->has('fecha'))
						<span class="help-block">
							<small>{{ $errors->first('fecha') }}</small>
						</span>
					@endif
				   
				</div>
			</div>
		</div>
	{!! Form::close() !!}	
</div>