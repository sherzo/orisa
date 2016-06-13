
            <div class="form-group">
              {!! Form::label('rif', 'Rif') !!}
                            <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon">J -</span>
                {!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Ingrese su nombre']) !!}
              
              </div>
            </div>
              

            <div class="form-group">
              {!! Form::label('razon_social', 'Razón social') !!} 

              {!! Form::text('razon_social', null, ['class' => 'form-control', 'placeholder' =>
              'Ej: Sefardi C.A', 'title' => 'Ingrese la razon social']) !!}
            </div>
            
            <div class="form-group">
              {!! Form::label('direccion', 'Dirección fiscal') !!} 
              
              <textarea name="direccion" class="form-control" placeholder="Ej: Calle 5 de marzo 30-11"></textarea>
            </div>
            <div class="form-group">
              {!! Form::label('telefono', 'Numero de telefono') !!}
              
              {!! Form::text('telefono', null, ['class' => 'form-control awesome', 'placeholder' => 'Ej: 04145897451', 'title' => 'Ingrese su contraseña']) !!}
              
            </div>
            <div class="form-group"> 
              {!! Form::label('correo', 'Correo Electronico') !!}
              
              {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com']) !!}
            </div>
          

<!--<br><br>

<div class="form-group">
	{!! Form::label('razon_social', 'Razon social') !!}
</div>			
   	<div class="input-group">
 {!! Form::text('razon_social', null, ['class' => 'form-control', 'placeholder' => 'Ej: Sefardi C.A', 'title' => 'Ingrese la razón social del proveedor', 'size' => '99']) !!}          
</div>
  
  <br><br>		

<div class="form-group">
	{!! Form::label('telefono', 'Numero de telefono') !!}
</div>			
   	
<div class="input-group">
  <div class="form-group">
				<select class="form-control" name="codigo" title="Seleccione el codigo">
                		<option value="0414">0414 -</option>
                		<option value="0424">0424 -</option>
                		<option value="0412">0412 -</option>
                		<option value="0416">0416 -</option>
                		<option value="0426">0426 -</option>
            	</select>           
   </div>
  <div class="form-group">
	{!! Form::text('telefono', null, ['class' => 'form-control awesome', 'placeholder' => '5897451', 'title' => 'Ingrese su contraseña', 'size' => '86']) !!}
</div>
</div>
<br><br>
<div class="form-group">
	{!! Form::label('direccion', 'Direccion') !!}
</div>			
   	
<div class="input-group">
      
	<textarea name="direccion" cols="100" class="form-control" placeholder="Ej: Calle 5 de marzo 30-11"></textarea>
</div>

<br><br>
<div class="form-group">
	{!! Form::label('correo', 'Correo electronico') !!}
</div>			
   	
<div class="input-group">

    {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'size' => '98']) !!}
</div>



   	-->