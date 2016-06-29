@include('flash::message')

{!! Form::open(['route' => 'admin.compra.index', 'method' => 'GET']) !!}


<div class="form-group">
{!! Form::label('proveedor', 'Seleccione el proveedor')!!}

{!! Form::select('proveedor', $providers, null, ['class' => 'form-control', 'onchange' => 'productos()']); !!}<br>
<button type="submit" class="btn btn-primary">Buscar</button>
</div>

{!! Form::close() !!}
<div class="col-md-3"></div>

@if($ingredients)
	
	@include('admin.purchases.partials.list_products')
	
@endif

@if($data_ingredient)

	@include('admin.purchases.partials.list_products_add')

@endif