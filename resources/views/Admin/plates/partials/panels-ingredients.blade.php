<br>


<div class="panel panel-default">
	<div class="panel-heading">Ingredientes del plato</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12"><h4>1.- Busque y agregue ingredientes</h4></div>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<label for="tipo">Seleccione el tipo</label>
						{!! Form::select('ingredients_types', $ingredients_types, null, ['class' => 'form-control select-types', 'id' => 'types']) !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="ingredients1"></div>				
			</div>
			
			<hr>

			<div class="row">
				<div id="agregados" class="col-md-12">
					<h4 class="muted">2.- Coloque las cantidades</h4>
					<table class="table">
						<thead>
							<tr class="active">
								<th>id</th>
								<th>Ingrediente</th>
								<th>Cantidad</th>
								<th>Unidad</th>
								<th>Remover</th>
							</tr>
						</thead>
						<tbody id="Tagregados">				
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h4 class="muted">3.- Selecciones La o las Salsas</h4>	
					{!! Form::select('sauces[]', $sauces, null, ['class' => 'form-control select-sauces form-control', 'multiple']) !!}
				</div>
			</div>
			
		</div><!-- FIN PANEL BODY -->
</div><!-- FIN PANEL -->
