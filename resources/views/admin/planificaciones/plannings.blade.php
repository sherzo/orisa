@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-12"><br><br>
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{url ('admin/planificaciones')}}">Planificación</a></li>
            <li class="active">Administrar</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"> Administrar - Planificación</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                Formulario
            </div>
            <div class="panel-body">
                <div class="row">
                	@foreach($planificaciones as $planificacion)
                    <div class="col-lg-4 col-lg-offset-2">
                    	<div class="form-group">
                        	{!! Form::label('inicio', 'Inicio') !!}
                        	{!! Form::text('dni', $planificacion->fecha_inicio,['class' => 'form-control', 'disabled']) !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                    	<div class="form-group">
                    		{!! Form::label('final', 'Final') !!}
                     		{!! Form::text('dni', $planificacion->fecha_final,['class' => 'form-control', 'disabled']) !!} 
                    	</div>  
                    </div>
                    @endforeach
                </div>
                <div class="row">
                	
                	<div class="col-lg-10 col-lg-offset-2">
                	@for($i=$planificacion->fecha_inicio; $i<=$planificacion->fecha_final ; $i = date('Y-m-d', strtotime($i ."+ 1 days"))) 

                   		{{ $i }} 
                   		
                   	@endfor
                   	</div>

                </div>
            </div>
        </div>
    </div>
</div>
	
		
	
@endsection
