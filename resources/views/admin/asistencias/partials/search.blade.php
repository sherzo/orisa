{!! Form::open(['route' => 'admin.asistencias.create', 'method' => 'GET', 'class' => 'form-inline']) !!}  	
	<div class="text-center">
		<div class="form-group">
			<div class="input-group">
				<div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
					{!! Form::date('fecha', null, ['class' => 'form-control', 'title' => 'Ingrese la fecha, para registrar asistencia.', 'required']) !!}

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
	</div>
{!! Form::close() !!}	