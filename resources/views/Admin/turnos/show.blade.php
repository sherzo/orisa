@extends('layouts.app')

@section('contenido')

{{-- */$a=0;/* --}}
{{-- */$k=0;/* --}}
{{-- */$n=0;/* --}}

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/planificaciones') }}"> Planificacíon</a></li>
            <li class="active">Ver</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Planificaciones   
            </div>
            <div class="panel-body">
            {!! Form::open(['route' => 'admin.planificaciones.administrar.dias.turnos.view', 'method' => 'GET']) !!} {{ csrf_field() }}
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="form-group">                           
                                {!! Form::select('planificacion', $planificacion, null, ['class' => 'form-control']) !!}
                            </div>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default" id="buscar" title="Buscar productos">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}

            @if($planning) 
                {!! Form::open(['route' => ['admin.planificaciones.administrar.dias.turnos.edit', $id], 'method' => 'GET']) !!} {{ csrf_field() }}
                    <div class="col-lg-12">
                        <table class="table table-striped table-responsive">
                            <tr>
                                <td class="text-center"></td>
                                @foreach($planning as $key => $planning_r)
                                    <td class="text-center"> 
                                        {{ $planning_r->dia }}
                                    </td>
                                            
                                        {{-- */$dias[$k] = $planning_r->id;/* --}}
                                        {{-- */$k++;/* --}}

                                @endforeach

                            </tr>

                            @if($holiday)
                                
                                @foreach($empleados as $empleado)
                                    <tr>
                                        <td> 
                                            {{ $empleado->full_name }}
                                        </td>
                                            
                                        {{-- */$empleado_id[$n] = $empleado->id;/* --}}
                                            
                                        @for($m=0; $m<$k; $m++)
                                            <td class="text-center">

                                                {{-- */$j=0;/* --}}

                                                @for($y=0;$y<count($holiday);$y++)

                                                    @if($holiday[$y]->empleado_id == $empleado_id[$n] AND $holiday[$y]->dia_id == $dias[$m])

                                                        {{-- */$j= 1;/* --}}

                                                        {!! Form::checkbox('empleado_id', 'value', true, ['class' => 'Form-control', 'disabled']) !!}
                                                        
                                                     @endif
                                                @endfor

                                                @if($j == 0)

                                                    {!! Form::checkbox('empleado_id', 'value', false, ['class' => 'Form-control', 'disabled']) !!}

                                                @endif
                                            </td>
                                        @endfor
                                    </tr>

                                        {{-- */$n++;/* --}}

                                @endforeach

                            @endif
                        </table>
                        <div class="col-lg-12 text-right">
                            &nbsp;&nbsp;<button type="submit" class="btn btn-primary btn-sm"> Editar </button>
                        </div>
                    </div>
                {!! Form::close() !!}
            @endif
            </div>
        </div>
    </div>
</div>


@endsection