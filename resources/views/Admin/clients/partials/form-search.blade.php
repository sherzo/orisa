@include('flash::message')
<div class="form-group">
	{!! Form::label('cedula', 'Ingrese la cedula') !!}

</div>
<div class="form-group">

	<div class="input-group">
			<!--  SELECT -->
			<div class="form-group">
				<select class="form-control" name="literal" title="Seleccione literal" id="literal">
						<option value="V">V -</option>
						<option value="E">E -</option>
                		<option value="J">J -</option>
                		<option value="C">C -</option>
                		<option value="G">G -</option>
            	</select>           
        	</div>	

			<!-- INPUT -->
        <div class="form-group">
            {!! Form::text('cedula', null, ['class' => 'form-control', 'title' => 'Ingrese la cedula', 'size' => '84', 'placeholder' => '25607932', 'id' => 'cedula', 'required']) !!}  
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