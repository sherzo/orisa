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
   <div class="text-center">  
	<div class="form-group">
		<label for="rif">Buscar Cliente </label>
		<div class="input-group">
			<div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
				{!! Form::select('literal', ['J-' => 'J', 'C-' => 'C', 'G-' => 'G'], null, ['class' => 'form-control']) !!}
          

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
            	<div class="dataTable_wrapper">
                	@include('admin.comandas.partials.field-view')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection