@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Nueva comanda</li>
        </ol>
    </div>
    </div>


<div class="row">
	<div class="col-md-3">
<div class="media">
  <div class="media-body">
    <h4 class="media-heading">Comanda</h4>
    Mesa
  </div>
  <div class="media-right">
    <a href="#">
      <img class="media-object" src="{{ asset('img/mesa.png')}}" alt="..." width="60" height="60">
    </a>
  </div>
</div>
	</div>
	<div class="col-md-9 ">
		<div class="form-group">
			<select class="form-control" id="eleccion">
				<option>Seleccione...</option>
				<option value="1">Platos</option>
				<option value="2">Tragos</option>
				<option value="3">Bebidas</option>
				<option value="4">Jugos</option>
			</select>
		</div>
	</div>
</div>
<br>

<div class="row bg-danger" id="tablero">
</div>



@endsection