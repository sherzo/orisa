@include('flash::message')
<div class="form-group">
	{!! Form::label('rif', 'Ingrese el Rif') !!}

</div>
<div class="form-group">

	<div class="input-group">
			<!--  SELECT -->
			<div class="form-group">
				<select class="form-control" name="literal" title="Seleccione literal" id="literal">
                		<option value="J">J -</option>
                		<option value="C">C -</option>
                		<option value="G">G -</option>
            	</select>           
        	</div>	

			<!-- INPUT -->
        <div class="form-group">
            {!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Ingrese el Rif', 'size' => '84', 'placeholder' => '25607932', 'id' => 'rif', 'required']) !!}  
		</div>

			<!-- BOTON BUSCAR -->
		<span class="input-group-btn">
        	<button type="submit" class="btn btn-default" type="button" id="buscar" title="Buscar proveedor">
					<span class="glyphicon glyphicon-search"></span>
        	</button>
        </span>
      
    </div><!-- CIERRA INPUT-GROUP-->
</div><!-- CIERRA FORM-GROUP -->
	<br><br>