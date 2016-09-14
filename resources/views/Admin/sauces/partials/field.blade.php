{!! Form::label('salsa', 'Nombre de la salsa') !!}

{!! Form::text('salsa', null, ['class' => 'form-control', 'placeholder' => 'Salsa de tomate'])!!}

<br><hr>
<div class="row">
	<div class="col-md-12">
		<h4>1.- Agregue los ingredientes</h4>
	</div>
</div>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="form-group"><br>
			<label for="tipo">Seleccione el tipo</label>
				
				{!! Form::select('ingredients_types', $ingredients_types, null, ['class' => 'form-control', 'id' => 'types']) !!}

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

<div class="row"><br><br><br>
	<div class="col-md-12" id="espacio_boton">
		<center>
			<button class="btn btn-sm btn-success">
				<span class="fa fa-save fa-2x"></span>
			</button>
		</center>
	</div>
</div>
