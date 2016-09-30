@extends('layouts.app')

@section('contenido')


<!-- ./row -->
	<div class="row">
		<div class="col-lg-12">
             <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
          
		        <li><a href="{{ route('admin.usuarios.index') }}">Bebidas</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#licores" aria-controls="profile" role="tab" data-toggle="tab">Licores</a></li>

    <li role="presentation"><a href="#ingredientes" aria-controls="home" role="tab" data-toggle="tab" id="error">Ingrediente</a></li>
    
    <li role="presentation" ><a href="#plato" aria-controls="messages" role="tab" data-toggle="tab">Publicación de la bebida</a></li>
  </ul>
    {!! Form::open(['route' => 'admin.bebidas.store', 'method' => 'POST', 'files' => true, 'id' => 'guardar']) !!}

<div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="licores">
   		@include('admin.drinks.partials.panels-liqueur')    
    </div><!-- FIN PILLS LICOR -->

    <div role="tabpanel" class="tab-pane" id="ingredientes">
   @include('admin.drinks.partials.panels-ingredient')
    </div><!-- FIN PILLS INGREDIENTE -->

    <div role="tabpanel" class="tab-pane" id="plato">
   		@include('admin.drinks.partials.panels-drink')        
    </div><!-- FIN PILLS PLATO -->
  
</div>

@endsection