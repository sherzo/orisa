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
					<th>Productos</th>
					
					<th>Precio</th>
					
				</tr>
			</thead>
			<tbody>
			
				@foreach($platos as $plato)
					<tr>
						<td>{{ $plato->plato }} </td>
						
						<td>{{ $plato->precio }} bs</td>
						
					</tr>
				@endforeach

				@foreach($tragos as $trago)
					<tr>
						<td>{{ $trago->trago }} </td>
						
						<td>{{ $trago->precio }} bs</td>
						
					</tr>
				@endforeach

				@foreach($bebidas as $bebida)
					<tr>
						<td>{{ $bebida->bebida }} </td>
						
						<td>{{ $bebida->precio }} bs</td>
						
					</tr>
				@endforeach

				@foreach($jugos as $jugo)
					<tr>
						<td>{{ $jugo->jugo }} </td>
						
						<td>{{ $jugo->precio }} bs</td>
						
					</tr>
				@endforeach
				<tr>
				
				
					<td class="text-right bg-info"><strong>Subtotal: </strong></td>
					<td>{{$subtotal}} bs</td>
				</tr>
				<tr>
				
				
				<td class="text-right bg-info"><strong>12% IVA: </strong></td>
				<td>{{$iva}} bs</td>
				</tr>

				<tr>
				
				
				<td class="text-right bg-info"><strong>5% Servicio: </strong></td>
				<td>{{$servicio}} bs</td>
				</tr>

				<tr>
				
				
				<td class="text-right bg-danger"><strong>TOTAL A PAGAR: </strong></td>
				<td class="bg-danger"><strong>{{$total}} bs</strong></td>
				</tr>
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