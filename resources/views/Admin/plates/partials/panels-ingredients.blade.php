<br>
<div class="panel panel-default">
	<div class="panel-heading">Ingredientes del plato</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<label for="tipo">Tipos de ingredientes</label>

						{!! Form::select('ingredients_types', $ingredients_types, null, ['class' => 'form-control', 'id' => 'types']) !!}

					</div>
				</div>
<br>
				<div class="col-md-6 col-md-offset-3">
					<table class="table">
                    <thead>
                    	<tr>
                    		<th>id</th>
              				<th>Ingrediente</th>
                    		<th>Agregar</th>
                    	</tr>
                    </thead>
                    <tbody id="ingredients">
                    	
                    </tbody>
                    </table>
				</div>
			
				</div>
		</div><!-- FIN PANEL BODY -->
</div><!-- FIN PANEL -->
