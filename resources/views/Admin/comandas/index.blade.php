@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Nueva comanda</li>
        </ol>
    </div>
    </div>
      {!! Form::open(['route' => 'admin.comandas.create', 'method' => 'GET']) !!}

<div class="row">
<?php  $contador = 0; ?>
	@foreach($mesas as $key => $mesa)
	           <div class="col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="@if($mesa || $mesas2[$contador]->estatus == 'Ocupada')
                    			{{ asset('img/tables/mesa-ocupada.png') }}
                    		  @else
                    		  {{ asset('img/tables/mesa.png') }}
                    		  @endif"
                     alt="" class="img-responsive" data-toggle="tooltip" data-placement="top" title="{{ $mesas2[$contador]->estatus }}">
                  </div>
                  <div class="panel-footer">
                  # {{ $key }}

                    <input type="radio" class="check" name="mesa_id" @if($mesa || ($mesas2[$contador]->estatus) == 'Ocupada') disabled="" @endif value="{{ $key }}">
                  </div>
                </div>
              </div>
              <?php $contador++; ?>
	@endforeach
</div>
<div class="row">
	<div class="col-lg-12 text-center" ><button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Siguiente"><span class="glyphicon glyphicon-circle-arrow-right"></span></button></div>
</div>
{!! Form::close() !!}

@endsection

@section('js')
<script>
	$('.check').on('change', function(){
		if ($(this).is(':checked')) {

        $(this).parent('.panel-default').attr('class', 'panel panel-primary')

    }else {

    	$(this).parent('.panel-default').attr('class', 'panel panel-default')
    }
	});
</script>
@endsection
