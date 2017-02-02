<div class="alert alert-danger hidden">
	<p class="text-danger">Corriga los errores antes de guardar</p>
</div>
<div class="row"><div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
     		 			<img src="../../img/ingresar.jpg" alt="..." id="img_prev">
    				</a>
  				</div>

				<div class="form-group">

					{!! Form::label('image', 'Imagen del jugo') !!}

					<input type="file" name="image" onchange="readURL(this)">

				</div>
			</div>
{!! Form::label('jugo', 'Nombre del jugo', ['id' => 'salsa_label']) !!}

{!! Form::text('jugo', null, ['class' => 'form-control', 'placeholder' => 'Lechoza', 'id' => 'salsa'])!!}

<br><hr>
<div class="row">
	<div class="col-md-12" id="titulo">
		<h4 id="titulo_ingredientes">1.- Agregue los ingredientes</h4>
	</div>
</div>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="form-group"><br>
			<label for="tipo" id="tipo_label">Seleccione el tipo</label>

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
						<tbody id="Tagregados"></tbody>
					</table>
				</div>
			</div>


<div class="row">
	<div class="form-group tooltip-demo text-center">
		<button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
		<button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Borrar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
	    <br>
	</div>
</div>
