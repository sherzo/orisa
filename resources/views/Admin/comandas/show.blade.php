@extends('layouts.app')

@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ url('admin/comandas/en-espera') }}">Comandas </a></li>
			<li><a href="{{ url('admin/comandas/procesadas') }}">Procesadas</a></li>
			<li class="active">Ver</li>
		</ol>
	</div>
</div>
<br>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">

			<div class="panel-heading">
                <em>Comandas Nº <strong>{{ $comanda->id }}</strong> </em>
                <span class="label label-primary pull-right">
					{{ $comanda->estatus }}
				</span>
            </div>
            <div class="panel-body">
            <div>
    @include('flash::message')

</div>
<div id="mensaje" class="col-md-10 col-md-offset-1"></div>
 
            	<div class="dataTable_wrapper">
						<hr>
						<div class="col-md-3 col-md-offset-1"><strong>Mesa: </strong> {{ $mesa[0]->id }}</div>

						<div class="col-md-3"><strong>Fecha: </strong> {{ $fecha }}</div>
            			<div class="col-md-3"><strong>Empleado:</strong> </div>
            			<br><br>

            			<div class="col-md-6 col-md-offset-1"><strong>Nombre o Razón social:</strong> {{ $cliente[0]->nombre }} <span id="nombre"></span> </div>
            			<div class="col-md-5"><strong>Cedula o Rif:</strong> {{ $cliente[0]->dni_cedula }}</div>
            			
					{!! Form::open(['route' => 'admin.comandas.procesar-factura', 'method' => 'POST']) !!}	
					<input type="hidden" name="command_id" value="{{ $comanda->id }}">
					<input type="hidden" name="client_id" id="cliente">
						<div class="col-md-10 col-md-offset-1">
						<div class="col-md-1"></div>
						<br>
						
							<table class="table table-bordered table-hover table-condensed">
								<thead>
									<tr>
										<th>Producto</th>
										<th>Cantidad</th>
										<th>Precio unitario</th>
										<th>Importe</th>
									</tr>
								</thead>
								<tbody>
								@include('admin.comandas.partials.invoice.plates')
								@include('admin.comandas.partials.invoice.beverages')
								@include('admin.comandas.partials.invoice.drinks')
								@include('admin.comandas.partials.invoice.juices')
								
								@include('admin.comandas.partials.invoice.footer')
								</tbody>
							</table>

							<div class="row">
								<div class="col-md-12 tooltip-demo text-center">
								<br>
									<a class="btn btn-default btn-sm " href="{{ route('admin.recibo', $comanda->id)}}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Generar PDF"><span class="glyphicon glyphicon-print fa-2x"></span></a>
									</div>
							</div>
					</div>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/buscar-cliente.js')}}"></script>
@endsection