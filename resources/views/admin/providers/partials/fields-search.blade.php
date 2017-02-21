<div class="text-center">  
	<div class="form-group">
		<div class="input-group">
			<div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
				{!! Form::select('literal', ['J-' => 'J', 'C-' => 'C', 'G-' => 'G'], null, ['class' => 'form-control', 'title' => 'Selecciones la literal']) !!}
          

				{!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Introduzca su número de Rif.', 'placeholder' => 'Ej. 004343990', 'id' => 'rif']) !!}

				<span class="input-group-btn">
					<button type="submit" class="btn btn-default"  data-toggle="tooltip" id="buscar" title="Buscar">
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