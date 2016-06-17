@extends('layout.layoutAdminDos')

@section('contenido')

<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#ingredientes" aria-controls="home" role="tab" data-toggle="tab">Ingrediente</a></li>
    <li role="presentation"><a href="#licores" aria-controls="profile" role="tab" data-toggle="tab">Licores</a></li>
    <li role="presentation"><a href="#plato" aria-controls="messages" role="tab" data-toggle="tab">Plato</a></li>
  </ul>

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
@endsection