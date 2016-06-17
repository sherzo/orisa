@include('flash::message')
<div class="form-group">
  {!! Form::label('document_em', 'Cédula') !!}
</div>
<div class="form-group">

  <div class="input-group">
      <!--  SELECT -->
      <div class="form-group">
        <select class="form-control" name="nationality" title="Seleccione literal" id="nationality">
                    <option value="V">V</option>
                    <option value="E">E</option>
              </select>           
          </div>  

      <!-- INPUT -->
        <div class="form-group">
            {!! Form::text('document_em', null, ['class' => 'form-control', 'title' => 'Introduzca la cádula del empleado', 'size' => '70', 'placeholder' => '25607932', 'id' => 'document_em', 'required']) !!}  
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