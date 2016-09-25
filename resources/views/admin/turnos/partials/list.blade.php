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