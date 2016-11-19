@extends('layouts.app')

@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ url('admin/platos') }}">Plato </a></li>
			<li class="active">Ver</li>
		</ol>
	</div>
</div>

<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
		            <em>Plato: <strong>{{ $plate->plato}}</strong></em>
		        </div>
		        <div class="panel-body">
		        <div class="row">
		        <div class="col-lg-2 col-md-3">
		        	<img src="{{asset('img/plates')}}/{{ $plate->image->imagen }}" alt="" class="img-responsive">
		        </div>
		        <div class="col-md-9">
		        	<strong>Plato: </strong>
		        	{{$plate->plato}}
		        	<br><br>
		        	<strong>Precio: </strong>
		        	{{$plate->precio}}
		        	<br><br>
		        	<strong>Descripcion: </strong>
		        	{{$plate->descripcion}}
		        </div>
		        </div>

		        <div class="row">
		        	<div class="col-md-12">
		        		<table class="table table-bordered">
		        			<thead>
		        				<tr>
		        					<td>Ingrediente</td>
		        					<td>Cantidad</td>
		        					<td>Unidad</td>
		        				</tr>
		        			</thead>
		        			<tbody>
		        				@foreach($ingredientes as $ingrediente)
									
									<tr>
										<td>{{$ingrediete->ingrediente}}</td>
									</tr>
		        				@endforeach
		        			</tbody>
		        		</table>
		        	</div>
		        </div>
		        </div>
		    </div>
		</div>
</div>
@endsection