@extends('layout.layoutAdminDos')

@section('contenido')


 <!--	
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="#">Platos</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
<div class="panel panel-default">
				<div class="panel-heading">Registro de platos, datos basicos</div>
					<div class="panel-body">
		{!! Form::open(['route' => 'admin.platos.store', 'method' => 'POST']) !!}
						
						<!--@include('admin.plates.partials.fields')
			<div class="col-xs-6 col-md-3">
    		<a href="#" class="thumbnail">
     		 <img src="../../img/ingresar.jpg" alt="...">
    		</a>
  			</div>

			<div class="form-group">

			
				{!! Form::label('name', 'Imagen del plato') !!}

				{!!  Form::file('image'); !!}
			</div>

<br><br><br><br>
		<div class="row">	
		<div class="col-lg-10 ">
		
			<div class="form-group">
				{!! Form::label('name', 'Nombre del plato') !!}

				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: Ajiaco', 'title' => 'Ingrese su nombre']) !!}
			</div>
		
		</div>
		</div>
		
		<div class="row">	
		<div class="col-md-3
		">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrediente', 'title' => 'Ingrese su nombre']) !!}

		</div></div>

<div class="row">	
		<div class="col-lg-10 ">

			<div class="form-group">
                		<br/>
                <center>
					<button class="btn btn-primary btn-sm">
						<span class="fa fa-refresh fa-2x"></span>
					</button>
					<button class="btn btn-success btn-sm">
						<span class="fa fa-save fa-2x"></span>
					</button>
                </center>
                </div> 

</div>
</div>
</div>
</div></div></div>
						{!! Form::close() !!}


</div> -->

<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Plato</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Ingredientes</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Licores</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Precio</a></li>
  </ul>


  <div class="tab-content">

 <!-- PASTILLA 1 -->
    <div role="tabpanel" class="tab-pane active" id="home">
<br>
<div class="panel panel-default">
				<div class="panel-heading">Datos iniciales</div>
					<div class="panel-body">
		{!! Form::open(['route' => 'admin.platos.store', 'method' => 'POST']) !!}
						
						<!--@include('admin.plates.partials.fields')-->
			<div class="col-xs-6 col-md-3">
    		<a href="#" class="thumbnail">
     		 <img src="../../img/ingresar.jpg" alt="...">
    		</a>
  			</div>

			<div class="form-group">

			
				{!! Form::label('name', 'Imagen del plato') !!}

				{!!  Form::file('image'); !!}
			</div>
<br><br><br><br><br>
	
		
			<div class="form-group">
				{!! Form::label('name', 'Nombre del plato') !!}

				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: Ajiaco', 'title' => 'Ingrese su nombre']) !!}
			</div>
		
		
	</div></div></div>

 <!-- 	PASTILLA 2	-->
    <div role="tabpanel" class="tab-pane" id="profile">
    <br>
	<div class="panel panel-default">
<div class="panel-heading">Ingredientes del plato</div>
			<div class="panel-body">
			<div class="row">
				<div class="col-md-10">
					<p>Busque y agregue los ingrediente del plato</p>
				</div>
			</div>
				<div class="row">	
					<div class="col-md-3">
			

					
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrediente', 'title' => 'Busque ingrediente']) !!}

					
      
   				 </div>
			
			<div class="col-md-2">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad', 'disabled']) !!}
			</div>
			<div class="col-md-2">
				<select class="form-control">
					<option>Kg</option>
					<option>Mg</option>
				</select>
			</div>
			<div class="col-md-2 ">
				<button class="btn btn-success btn-sm pull-right"><span class="fa fa-plus"></span></button>
		</div>
	</div>

	<div class="row"><hr>
		<div class="col-md-10"><br>
		<p class="bold">Lista de ingredientes agregados</p>
			<table class="table table-hover">
				<thead>
				<th>#</th>
				<th>Ingrediente</th>
				<th>Cantidad</th>
				<th>Unidad</th>
				<th>Acción</th>
				</thead>

				<tbody>
				<tr>
				<td>1</td>
					<td>Arroz</td>
					<td>
						300

					</td>
					<td>
						g.
					</td>
					<td>
						<button class="btn btn-danger btn-sm"><span class="fa fa-times"></span></button>
					</td>
				</tr>

				<tr>
				<td>2</td>
					<td>Pollo</td>
					<td>
						30 

					</td>
					<td>
						g.
					</td>
					<td>
						<button class="btn btn-danger btn-sm"><span class="fa fa-times"></span></button>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
				
			</div><!-- FIN PANEL BODY -->
	</div><!-- FIN PANEL -->


    </div><!-- FIN PANEL -->
    <div role="tabpanel" class="tab-pane" id="messages"><br>
	<div class="panel panel-default">

		<div class="panel-heading">Licores del plato</div>
			<div class="panel-body">
			<div class="row">
				<div class="col-md-10">
					<p>Busque y agregue los licores del plato</p>
				</div>
			</div>
				<div class="row">	
					<div class="col-md-3">
			

					
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrediente', 'title' => 'Busque ingrediente']) !!}

					
      
   				 </div>
			
			<div class="col-md-2">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'title' => 'Ingrese la cantidad', 'disabled']) !!}
			</div>
			<div class="col-md-2">
				<select class="form-control">
					<option>L</option>
					<option>Ml</option>
				</select>
			</div>
			<div class="col-md-2 ">
				<button class="btn btn-success btn-sm pull-right"><span class="fa fa-plus"></span></button>
		</div>
	</div>

	<div class="row"><hr>
		<div class="col-md-10"><br>
		<p class="bold">Lista de licores agregados</p>
			<table class="table table-hover">
				<thead>
				<th>#</th>
				<th>Licor</th>
				<th>Cantidad</th>
				<th>Unidad</th>
				<th>Acción</th>
				</thead>

				<tbody>
				<tr>
				<td>1</td>
					<td>Vino</td>
					<td>
						10

					</td>
					<td>
						ml.
					</td>
					<td>
						<button class="btn btn-danger btn-sm"><span class="fa fa-times"></span></button>
					</td>
				</tr>

				
				</tbody>
			</table>
		</div>
	</div>
				
			</div><!-- FIN PANEL BODY -->
	</div><!-- FIN PANEL --></div>
  </div>
@endsection