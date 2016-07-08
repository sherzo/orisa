@extends('layout.layoutAdminDos')

@section('contenido')
 	<!-- ./row -->
<div class="row">
	<div class="col-lg-12">
        <ol class="breadcrumb">
        	<li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
        	<li><a href="{{ route('admin.employees.index') }}">Empleados</a></li>
        	<li class="active">Buscar</li>
        </ol>
    </div>
</div>

{!! Form::open(['route' => 'admin.employees.search', 'method' => 'POST', 'class' => 'form-inline']) !!}

<div class="row-center">	
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Cédula</div>
      <center>
			<div class="panel-body">
				@include('flash::message')					
			
			<div class="form-group">
  				<div class="input-group">

					<div class="form-group">
        				<select class="form-control" name="nationality" title="Seleccione literal" id="nationality">
                    		<option value="V">V</option>
                    		<option value="E">E</option>
              			</select>           
          			</div>

        		<div class="form-group">
            		{!! Form::text('document_em', null, ['class' => 'form-control', 'title' => 'Porfavor Introduzca la Cédula del Empleado', 'size' => '70', 'placeholder' => '25607932', 'id' => 'document_em', 'required']) !!}  
            	</div>
    				<span class="input-group-btn">
      					<button type="submit" class="btn btn-default" type="button" id="buscar" title="Buscar proveedor">
       						<span class="glyphicon glyphicon-search"></span>
      					</button>
    				</span>
    			</div><!-- CIERRA INPUT-GROUP-->
			</div><!-- CIERRA FORM-GROUP -->			
			</div>
      </center>
        </div>
	</div>
</div>
{!! Form::close() !!}

@endsection
