@extends('layouts.app')

@section('contenido')
<div class="row">
		<div class="col-lg-12">
				<h5 class="page-header"></h5>
		</div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ route('admin.asistencias.index') }}">Asistencias </a></li>
            <li>Editar</li>
        </ol>
    </div>
</div>
<div><br>
    @include('flash::message')
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            	Editar
            </div>
            <div class="panel-body">
                <div class="tab-content">
                	<div class="col-lg-4">
                		{{ Form::model($asistencia, ['route' => ['admin.asistencias.update', $asistencia->id],'method' => 'PUT']) }} {{ csrf_field() }} 
                    	<div class="form-group{{ $errors->has('personal') ? ' has-error' : '' }}">
                        	{!! Form::label('empleado', 'Empleado') !!}
                        	{!! Form::text('personal', $asistencia->personal->full_name, ['class' => 'form-control', 'disabled']) !!}

                        	@if ($errors->has('personal'))
                            	<span class="help-block">
                                	<small>{{ $errors->first('personal') }}</small>
                            	</span>
                        	@endif
                    	</div>
                    	<div class="form-group{{ $errors->has('asistencia') ? ' has-error' : '' }}">
                        	{!! Form::label('asistencia', 'Fecha') !!}
                        	{!! Form::text('asistencia', $asistencia->attendays->fecha, ['class' => 'form-control', 'disabled']) !!}

                        	@if ($errors->has('asistencia'))
                            	<span class="help-block">
                                	<small>{{ $errors->first('asistencia') }}</small>
                            	</span>
                        	@endif
                    	</div>
                	</div>
                	<div class="col-lg-4">
                		<div class="form-group{{ $errors->has('hora_entrada') ? ' has-error' : '' }}">
                        	{!! Form::label('hora_entrada', 'Entrada') !!}
                        	{!! Form::time('hora_entrada', null, ['class' => 'form-control']) !!}

                        	@if ($errors->has('hora_entrada'))
                            	<span class="help-block">
                                	<small>{{ $errors->first('hora_entrada') }}</small>
                            	</span>
                        	@endif
                    	</div>
                    	<div class="form-group{{ $errors->has('motivo') ? ' has-error' : '' }}">
                        	{!! Form::label('motivo', 'Motivo') !!}
                        	{!! Form::text('motivo', null, ['class' => 'form-control', 'placeholder' => 'Vacío']) !!}

                        	@if ($errors->has('motivo'))
                            	<span class="help-block">
                                	<small>{{ $errors->first('motivo') }}</small>
                            	</span>
                        	@endif
                    	</div>
                	</div>
                	<div class="col-lg-4">
                		<div class="form-group{{ $errors->has('hora_salida') ? ' has-error' : '' }}">
                        	{!! Form::label('hora_salida', 'Salida') !!}
                        	{!! Form::time('hora_entrada', null, ['class' => 'form-control']) !!}

                        	@if ($errors->has('hora_salida'))
                            	<span class="help-block">
                                	<small>{{ $errors->first('hora_salida') }}</small>
                            	</span>
                        	@endif
                    	</div>
                    	<div class="form-group{{ $errors->has('justificacion') ? ' has-error' : '' }}">
                        	{!! Form::label('justificacion', 'Justificación') !!}
                        	{!! Form::textarea('justificacion', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'Vacío']) !!}

                        	@if ($errors->has('justificacion'))
                            	<span class="help-block">
                                	<small>{{ $errors->first('justificacion') }}</small>
                            	</span>
                        	@endif
                    	</div>
                    	<div class="col-lg-12">
                    		<div class="col-lg-offset-10"><br><br>
                   				<button type="submit" class="btn btn-primary">Guardar</button>
                			</div>
                		</div>
                	</div>
            	</div>
        	</div>                
    	</div>
	</div>
</div>
@endsection