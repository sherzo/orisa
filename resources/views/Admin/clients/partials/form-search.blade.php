<div class="text-center">  
	<div class="form-group">
		<div class="input-group">
			<div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
				{!! Form::select('literal', ['V-' => 'V', 'E-' => 'E'], null, ['class' => 'form-control']) !!}
          

				{!! Form::text('cedula', null, ['class' => 'form-control', 'title' => 'Introduzca su número de cédula.', 'placeholder' => '10005137', 'id' => 'cedula']) !!}

				<span class="input-group-btn">
					<button type="submit" class="btn btn-default" id="buscar" title="Buscar">
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
