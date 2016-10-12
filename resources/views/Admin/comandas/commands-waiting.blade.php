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

    <div class="row" id="comandas">
    	
    	@foreach($commands as $key => $comanda)
    
    	<div class="col-md-4">
    		<div class="panel-group" role="tablist">
    		 	<div class="panel panel-default">
    		  		<div class="panel-heading" role="tab" id="collapseListGroupHeading{{$comanda->id}}">
    		   			<h4 class="panel-title">
    		    			<a href="#collapseListGroup{{$comanda->id}}" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup{{$comanda->id}}" data-parent="#accordion">Mesa:</a>&nbsp;
    		    			<img src="{{ asset('img/mesa.png') }}" width="25px" height="25px">
							<span class="label  @if($comanda->estatus == 'En espera')
												label-warning
												@endif() 

												@if($comanda->estatus == 'Lista')
												label-success
												@endif pull-right estatus{{$comanda->id}}">{{ $comanda->estatus}}</span> 
    		     		</h4> 
    		     	</div> 
    		    	<div class="collapse panel-collapse" role="tabpanel" id="collapseListGroup{{$comanda->id}}" aria-labelledby="collapseListGroupHeading{{$comanda->id}}">
	    		    	<ul class="list-group">
	    		    	<!-- PLATOS -->
	    		    	@if($comanda->plates)
	    		    		<li class="list-group-item"><em>Platos </em><span class="fa fa-cutlery"></span></li>
	    		    		@foreach($comanda->plates as $key2 => $plate)
		    		       		<li class="list-group-item text-center">{{ $plate->plato }}</li>
		    		        @endforeach
		    		    @endif

						<!-- TRAGOS -->
	    		    	@if($comanda->beverages)
	    		    		<li class="list-group-item"><em>Tragos </em><span class="fa fa-glass"></span></li>
	    		    		@foreach($comanda->beverages as $key2 => $trago)
		    		       		<li class="list-group-item text-center">{{ $trago->trago }}</li>
		    		        @endforeach
		    		    @endif

						<!-- BEBIDAS -->
	    		    	@if($comanda->drinks)
	    		    		<li class="list-group-item "><em>Bebidas</em><span class="fa fa-coffee"></span></li>
	    		    		@foreach($comanda->drinks as $key2 => $bebida)
		    		       		<li class="list-group-item text-center">{{ $bebida->bebida }}</li>
		    		        @endforeach
		    		    @endif

		    		    <!-- JUGOS -->
	    		    	@if($comanda->juices)
	    		    		<li class="list-group-item"><em>Jugos</em></li>
	    		    		@foreach($comanda->juices as $key2 => $jugo)
		    		       		<li class="list-group-item text-center">{{ $jugo->jugo }}</li>
		    		        @endforeach
		    		    @endif

		    		    </ul> 
	    		        <div class="panel-footer">
	    		        	@if($comanda->estatus == 'En espera' AND ((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='4'))

	    		        	<button class="btn btn-primary btn-xs procesar" type="{{ $comanda->id }}"><span class="fa fa-check fa-2x"></span></button>
    		        		@endif

	    		       
						@if($comanda->estatus == 'Lista' AND ((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='5'))
						{!! Form::open(['route' => 'admin.comandas.facturar', 'method' => 'GET']) !!}
							<input type="hidden" name="command" value="{{$comanda->id}}">
	    		        	<button class="btn btn-primary btn-xs"><span class="fa fa-money fa-2x"></span></button>
						@endif
						
	    		        </div> 
    		    	</div> 
    			</div> 
    		</div>
    	</div>
		@endforeach
		
	</div>
@endsection

@section('js')
<script>
	
</script>
@endsection