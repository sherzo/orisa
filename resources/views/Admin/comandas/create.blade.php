@extends('layouts.panel-comandas')

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <br>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ route('admin.comandas.index') }}">Nueva comanda</a></li>
            <li class="active">Panel de comandas</li>
        </ol>
    </div>
    </div>


<div class="row">
	<div class="col-md-3">
<div class="media">
  <div class="media-body">
    <h4 class="media-heading">Comanda</h4>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesa <input type="hidden" name="table_id" value="{{ $mesa }}">
  </div>
  <div class="media-right">
    <a href="#">
      <img class="media-object" src="{{ asset('img/tables/mesa-') }}{{ $mesa.'.png'}}" alt="..." width="50" height="50">
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>



@endsection