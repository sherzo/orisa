<br>


<div class="panel panel-default">
	<div class="panel-heading">Ingredientes del plato</div>
		<div class="panel-body">
		<div class="row">
			<div class="col-md-12"><p>1.- Busque y agregue los ingredientes</p></div>
		</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<label for="tipo">Tipos de ingredientes</label>

						{!! Form::select('ingredients_types', $ingredients_types, null, ['class' => 'form-control', 'id' => 'types']) !!}

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="ingredients1">
					
		
				</div>
				
			</div>
<hr>

			<div class="row">
				<div id="agregados" class="col-md-12">

		<p class="muted">2.- Lista de ingredientes agregados coloque las cantidades</p>
					<table class="table">
						<thead>
							<tr>
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

		</div><!-- FIN PANEL BODY -->
</div><!-- FIN PANEL -->
