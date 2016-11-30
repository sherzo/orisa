@extends('layouts.app')

@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ url('admin/comandas/en-espera') }}">Comandas</a></li>
			<li class="active">Facturar</li>
		</ol>
	</div>
</div>
<br>
<div>
    @include('flash::message')

</div>
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
            <div class="form-inline">
   <div class="text-center">
	<div class="form-group">
		<label for="rif">Buscar Cliente </label>
		<div class="input-group">
			<div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
				{!! Form::select('literal', ['V-' => 'V', 'E-' => 'E', 'J-' => 'J' , 'C-' => 'C' , 'G-' => 'G'], null, ['class' => 'form-control', 'id' => 'nacionalidad']) !!}

				<input type="hidden" name="comanda_id" value="{{$comanda->id}}" id="id">

				{!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Introduzca la cédula o el rif.', 'placeholder' => '25607793', 'id' => 'documento']) !!}

				<span class="input-group-btn">
					<button type="submit" class="btn btn-default" id="buscar" title="Buscar">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>

				@if ($errors->has('rif'))
					<span class="help-block">
						<small>{{ $errors->first('rif') }}</small>
					</span>
				@endif

			</div>
		</div>
	 </div>
	</div>
</div>
<div class="row">
	<div id="mensaje" class="col-md-10 col-md-offset-1"></div>
 </div>
            	<div class="dataTable_wrapper">
						<hr>
						<div class="col-md-3 col-md-offset-1"><strong>Mesa: </strong> {{ $mesa[0]->id }}</div>

						<div class="col-md-3"><strong>Fecha: </strong> {{ $fecha }}</div>
            			<div class="col-md-3"><strong>Empleado:</strong> </div>
            			<br><br>

            			<div class="col-md-6 col-md-offset-1"><strong>Nombre o Razón social:</strong> <span id="nombre"></span> </div>
            			<div class="col-md-5"><strong>Cedula o Rif:</strong> <span id="cedula"></span></div>

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
									<button class="btn btn-default btn-sm " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Primero busque al cliente" disabled="" id="boton_procesar"><span class="glyphicon glyphicon-copy fa-2x"></span></button>

									</div>
							</div>
						<input type="hidden" name="total" value="{{ $total }}">
						<input type="hidden" name="subtotal" value="{{ $subtotal }}">
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
