@extends('layouts.app')

@section('contenido')

<div class="row">
		<div class="col-lg-12">
				<h5 class="page-header"></h5>
		</div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Salsas </li>
        </ol>
    </div>
</div>
<div class="col-lg-14">
    <a href="{{ url('admin/sauces/create') }}">
        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Nueva Salsa"><span class="fa fa-plus"></span></button>
    </a>
</div>
<div><br>
    @include('flash::message')
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
								<em>Registro de prooveedores</em>
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
									@include('admin.sauces.partials.table')
								</div>
						</div>
				</div>
		</div>
</div>

@endsection
