@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ route('admin.comandas.index') }}">Nueva comanda</a></li>
            <li class="active">En espera</li>
        </ol>
    </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        @include('flash::message')
      </div>
    </div>

    <div class="row" id="comandas">

    	@foreach($commands as $key => $comanda)
    		<?php $contador++; ?>
    	<div class="col-md-12">
    		<div class="panel-group" role="tablist">
    		 	<div class="panel panel-default">
    		  		<div class="panel-heading" role="tab" id="collapseListGroupHeading{{$comanda->id}}">
    		   			<h4 class="panel-title">
    		    			<a href="#collapseListGroup{{$comanda->id}}" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup{{$comanda->id}}" data-parent="#accordion" title="Ver detalles">Comanda #{{$contador}}</a>&nbsp;
    		    			Mesa:
    		    			<img src="{{ asset('img/tables/mesa-') }}{{ $comanda->table_id.'.png'}}" width="25px" height="25px">

                  <?php list($fecha, $hora) = explode(' ', $comanda->created_at)  ?>&nbsp;&nbsp;&nbsp;
                  <span style="font-size: 12px">  <strong>Hora:</strong> {{ $hora }} </span>
             <span class="label  @if($comanda->estatus == 'En espera')
												label-warning
												@endif()

												@if($comanda->estatus == 'Lista')
												label-primary
												@endif pull-right estatus{{$comanda->id}}">{{ $comanda->estatus}}</span>

    		     		</h4>
    		     	</div>
                        <div class="collapse panel-collapse" role="tabpanel" id="collapseListGroup{{$comanda->id}}" aria-labelledby="collapseListGroupHeading{{$comanda->id}}">
                        <ul class="list-group">
        		    	        @include('admin.comandas.partials.details.plates')

                                @include('admin.comandas.partials.details.beverages')

                                @include('admin.comandas.partials.details.drinks')

                                @include('admin.comandas.partials.details.juices')
                        </ul>
                                @include('admin.comandas.partials.details.footer')
    		</div>
        </div>
    </div>
    </div>

		@endforeach

	</div>
@endsection

@section('js')
<script src="{{ asset('js/update-commands.js') }}"></script>
@endsection
