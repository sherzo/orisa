@extends('layouts.app')

@section('contenido')

<!-- ./row -->
	<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/tragos') }}">Bebidas alcoholicas</a></li>
                    <li class="active">Nuevo</li>
            </ol>
    	</div>
    </div>

<ul class="nav nav-tabs nav-justified" role="tablist">   
    <li role="presentation" class="active"><a href="#licores" aria-controls="profile" role="tab" data-toggle="tab">Licores</a></li>
    <li role="presentation"><a href="#ingredientes" aria-controls="home" role="tab" data-toggle="tab" id="error">Ingrediente</a></li>
    <li role="presentation"><a href="#trago" aria-controls="messages" role="tab" data-toggle="tab">Publicación de la bebida</a></li>
  </ul>
    {!! Form::open(['route' => 'admin.tragos.store', 'method' => 'POST', 'files' => true, 'id' => 'guardar']) !!}

<div class="tab-content">

<!-- FIN PILLS INGREDIENTE -->

    <div role="tabpanel" class="tab-pane active" id="licores">
   		@include('admin.beverages.partials.panels-liqueurs')    
    </div><!-- FIN PILLS LICOR -->
  
    <div role="tabpanel" class="tab-pane" id="ingredientes">

      @include('admin.beverages.partials.panels-ingredients')
    </div>

    <div role="tabpanel" class="tab-pane" id="trago">
   		@include('admin.beverages.partials.panels-trago')        
    </div><!-- FIN PILLS PLATO -->
  
</div>

    {!! Form::close() !!}

@endsection

@section('js')
  <script>
    $('.select-sauces').chosen({
      placeholder_text_multiple: 'Selecione las Salsas',
      no_results_text: 'No se encontraron salsas'
    });


  </script>
@endsection
