@if(count($planificacion) > 1 OR count($planificacion) == 1)
<div class="form-group">
	<div class="input-group">
		<div class="form-group">
			{!! Form::select('id', $planificacion, null, ['class' => 'form-control']) !!}
		</div>
     	<span class="input-group-btn">
        	<button type="submit" class="btn btn-default" type="button" id="buscar" title="Buscar productos">
          		<span class="glyphicon glyphicon-search"></span>
          	</button>
        </span>
 	</div>
</div>
@else
<div class="form-group">
	<p class="text-danger text-center">No se encontraron resultados coincidentes</p>
</div>
@endif