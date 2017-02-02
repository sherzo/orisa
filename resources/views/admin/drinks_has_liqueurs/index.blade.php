@extends('layouts.app')

@section('contenido')		
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="{{ route('admin.bebidas.index') }}">Bebidas</a></li>
		</ol>				
	</div>
</div>
<br>
<div>
    @include('flash::message')
</div>
<div class="col-lg-4">
	<a  href="{{ url('admin/bebidas/create') }}" class="btn btn-primary"><span class="fa fa-plus"></span> Nuevo</a>
</div>  
<br>
<div class="row">
	@foreach($drinks as $drink)
		<div class="col-md-4">
			<div class="panel panel-default">
									<div class="panel-body">
										<img src="../img/drinks/" alt="" class="img-responsive">
									</div>
									<div class="panel-footer">
										{{ $drink->bebida }}
										
										<a href="#" class="btn btn-default btn-xs pull-right "> <span class="fa fa-trash-o fa-2x"></span> </a> &nbsp;&nbsp;

										<a href="#" class="btn btn-default btn-xs pull-right "> <span class="fa fa-trash-o fa-2x"></span> </a> &nbsp;&nbsp;
								
										<a href="#" class="btn btn-default btn-xs pull-right "> <span class="fa fa-pencil fa-2x"></span> </a>
									</div>
								</div>
							</div>
<!--               <div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									
									<div class="caption">
										<h4>{{ $drink->plato }}</h4>
										
										<p>
											<a href="#" class="btn btn-default btn-xs" role="button"><span class="fa fa-pencil fa-2x"></span></a>

											<a href="#" class="btn btn-danger btn-xs pull-right" role="button"><span class="fa fa-trash-o fa-2x"></span></a>
										</p>
									</div>
								</div>
							</div> -->
						@endforeach
					</div>
@endsection