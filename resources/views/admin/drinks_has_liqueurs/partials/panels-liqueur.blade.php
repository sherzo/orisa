<br>
<div class="panel panel-default">
	<div class="panel-heading">Licores de la bebida</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12"><h4>1.- Busque y agregue licores</h4></div>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<label for="tipo">Seleccione el tipo</label>
						{!! Form::select('liqueurs_types', $liqueurs_types, null, ['class' => 'form-control', 'id' => 'types_liqueurs']) !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="lista_licores"></div>				
			</div>
			
			<hr>

			<div class="row">
				<div id="" class="col-md-12">
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
						<tbody id="licores_agregados">				
						</tbody>
					</table>
				</div>
				
			</div>

		</div><!-- FIN PANEL BODY -->
</div><!-- FIN PANEL -->
