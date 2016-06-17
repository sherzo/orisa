@extends('layout.layoutAdminDos')

@section('employee_content')
 	<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="{{ route('admin.employees.index') }}">Empleados</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

	<div class="row">	
		<div class="col-lg-10 ">
			<div class="panel panel-default">
				<div class="panel-heading">Buscar</div>
					<div class="panel-body">

						@include('admin.partial.errors')


						{!! Form::open(['route' => 'admin.employees.search', 'method' => 'POST', 'class' => 'form-inline']) !!}
					 	
						@include('admin.employees.partials.fields')

						{!! Form::close() !!}
						
					</div>
        	</div>
		</div>
	</div>
</div>
@endsection
