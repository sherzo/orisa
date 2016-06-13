<div class="form-group">
	{!! Form::label('rif', 'Rif') !!}

</div>

<div class="form-group">

	<div class="input-group">
			<!--  SELECT -->
			<div class="form-group">
				<select class="form-control" name="category" title="Seleccione literal">
                		<option value="0">J -</option>
                		<option value="1">C -</option>
                		<option value="2">G -</option>
            	</select>           
        	</div>	

			<!-- INPUT -->
        <div class="form-group">
            {!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Ingrese el Rif', 'size' => '71', 'placeholder' => '25607932']) !!}  
		</div>

			<!-- BOTON BUSCAR -->
		<span class="input-group-btn">
        	<button class="btn btn-default" type="button">
					<span class="glyphicon glyphicon-search"></span>
        	</button>
        </span>
      
    </div><!-- CIERRA INPUT-GROUP-->
</div><!-- CIERRA FORM-GROUP -->
	
<br><br>

<div class="form-group">
	{!! Form::label('razon_social', 'Razon social') !!}
</div>			
   	<div class="input-group">
 {!! Form::text('razon_social', null, ['class' => 'form-control', 'placeholder' => 'Ej: Sefardi C.A', 'title' => 'Ingrese la razón social del proveedor', 'size' => '90']) !!}          
</div>
  
  <br><br>		

<div class="form-group">
	{!! Form::label('telefono', 'Numero de telefono') !!}
</div>			
   	
<div class="input-group">
  <div class="form-group">
				<select class="form-control" name="category" title="Seleccione literal">
                		<option value="0414">0414 -</option>
                		<option value="0424">0424 -</option>
                		<option value="0412">0412 -</option>
                		<option value="0416">0416 -</option>
                		<option value="0426">0426 -</option>
            	</select>           
   </div>
  <div class="form-group">
	{!! Form::text('telefono', null, ['class' => 'form-control awesome', 'placeholder' => '5897451', 'title' => 'Ingrese su contraseña', 'size' => '74']) !!}
</div>
</div>
<br><br>
<div class="form-group">
	{!! Form::label('direccion', 'Direccion') !!}
</div>			
   	
<div class="input-group">
      
	<textarea name="direccion" cols="90" class="form-control" placeholder="Ej: Calle 5 de marzo 30-11"></textarea>
</div>

<br><br>
<div class="form-group">
	{!! Form::label('correo', 'Correo electronico') !!}
</div>			
   	
<div class="input-group">

    {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'size' => '90']) !!}
</div>



   	