@include('flash::message')

{!! Form::open(['route' => 'admin.compra.index', 'method' => 'GET']) !!}
<div class="form-group">
<div class="input-group">
	<div class="form-group">

    {!! Form::select('proveedor', $providers, null, ['class' => 'form-control', 'onchange' => 'productos()']); !!}

	</div>
      <!-- BOTON BUSCAR -->
      <span class="input-group-btn">
          <button type="submit" class="btn btn-default" type="button" id="buscar" title="Buscar productos">
          <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      
 </div><!-- CIERRA INPUT-GROUP-->
</div>


{!! Form::close() !!}
<div class="col-md-3"></div>

@if($ingredients)
	
	@include('admin.purchases.partials.list_products')
	
@endif

@if($data_ingredient)

	@include('admin.purchases.partials.list_products_add')

@endif