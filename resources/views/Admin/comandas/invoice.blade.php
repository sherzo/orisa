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
                <span class="label label-success pull-right">
					{{ $comanda->estatus }}
				</span>
            </div>
            <div class="panel-body">
            <form class="form-inline">
            @if(!session()->has('client'))
   <div class="text-center">  
	<div class="form-group">
		<label for="rif">Buscar Cliente </label>
		<div class="input-group">
			<div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
				{!! Form::select('literal', ['V-' => 'V', 'E-' => 'E', 'J-' => 'J' , 'C-' => 'C' , 'G-' => 'G'], null, ['class' => 'form-control']) !!}
          
				<input type="hidden" name="comanda_id" value="{{$comanda->id}}">

				{!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Introduzca su número de Rif.', 'placeholder' => '00006372-9', 'id' => 'rif']) !!}

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
</form>
 @endif
            	<div class="dataTable_wrapper">
                	<div class="col-md-10 col-md-offset-1">
						<hr>
						<p>Mesa : {{ $comanda->table_id }}</p>
						<p>Fecha : {{ $comanda->created_at }}</p>
						<p>Empleado: {{ $comanda->employe_id }}</p>
						<p>CI o Rif cliente: @if(session()->has('client')) V-25607793 @endif</p>
						<p>Nombre cliente: @if(session()->has('client')) Saul Florez @endif</p>
						
						
						<div class="col-md-1"></div>
						<br>
						<div class="col-md-14 center-block">
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
									<a class="btn btn-default btn-sm " type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="@if(!session()->has('client'))Primero busque al cliente @else Facturar @endif" href="{{ route('admin.comandas.facturar', [$comanda->id]) }}" @if(!session()->has('client'))disabled="true" @endif><span class="glyphicon glyphicon-copy fa-2x" ></span></a>
									<a class="btn btn-default btn-sm " type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="PDF" href=""><span class="glyphicon glyphicon-print fa-2x"></span></a>
									</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection