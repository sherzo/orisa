@extends('layouts.app')

@section('contenido')

<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
          
		        <li><a href="{{ route('admin.usuarios.index') }}">Platos</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#ingredientes" aria-controls="home" role="tab" data-toggle="tab">Ingrediente</a></li>
    <li role="presentation"><a href="#licores" aria-controls="profile" role="tab" data-toggle="tab">Licores</a></li>
    <li role="presentation"><a href="#plato" aria-controls="messages" role="tab" data-toggle="tab">Publicación de plato</a></li>
  </ul>
    {!! Form::open(['route' => 'admin.platos.store', 'method' => 'POST', 'files' => true]) !!}

<div class="tab-content">

   <div role="tabpanel" class="tab-pane active" id="ingredientes">

   		@include('admin.plates.partials.panels-ingredients')
	</div><!-- FIN PILLS INGREDIENTE -->

    <div role="tabpanel" class="tab-pane" id="licores">
   		@include('admin.plates.partials.panels-liqueurs')    
    </div><!-- FIN PILLS LICOR -->

    <div role="tabpanel" class="tab-pane" id="plato">
   		@include('admin.plates.partials.panels-plate')        
    </div><!-- FIN PILLS PLATO -->
  
</div>

    {!! Form::close() !!}

@endsection