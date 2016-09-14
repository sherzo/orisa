@extends('layouts.app')

@section('contenido')
	
<div class="row">		
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Reservaciones </li>
        </ol>
    </div>
    <div class="col-lg-12 ">
				<h1 class="page-header">Reservaciones</h1>
	</div>
</div>

<div class="row bg-success">
<a href="#" id="">
	<div class="col-md-2 col-md-offset-2">
		<img class="img-responsive" src="{{ asset('img/mesa-ocupado.png') }}">
	</div>
</a>
	<div class="col-md-2 "><img src="{{ asset('img/mesa-disponible.png') }}" alt="" class="img-responsive"></div>
	<div class="col-md-2 "><img src="{{ asset('img/mesa-disponible.png') }}" alt="" class="img-responsive"></div>
<a href="" class="disabled" disabled>
	<div class="col-md-2 "><img src="{{ asset('img/mesa-ocupado.png') }}" alt="" class="img-responsive">
	</div>
</a>
	<div class="col-md-2 col-md-offset-2 "><img src="{{ asset('img/mesa.png') }}" alt="" class="img-responsive"></div>

	<div class="col-md-2 "><img src="{{ asset('img/mesa.png') }}" alt="" class="img-responsive"></div>

	<div class="col-md-2"><img src="{{ asset('img/mesa-disponible.png') }}" alt="" class="img-responsive"></div>

	<div class="col-md-2"><img src="{{ asset('img/mesa.png') }}" alt="" class="img-responsive"></div>
	<div class="col-md-2 col-md-offset-2"><img src="{{ asset('img/mesa.png') }}" alt="" class="img-responsive"></div>
	<div class="col-md-2"><img src="{{ asset('img/mesa.png') }}" alt="" class="img-responsive"></div>
	<div class="col-md-2"><img src="{{ asset('img/mesa.png') }}" alt="" class="img-responsive"></div>
	<div class="col-md-2"><img src="{{ asset('img/mesa.png') }}" alt="" class="img-responsive"></div>

@endsection