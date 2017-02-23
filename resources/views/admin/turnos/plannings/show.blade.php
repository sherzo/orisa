@extends('layouts.app')

@section('contenido')

<div class="row">
	<div class="col-lg-12">
        <h5 class="page-header"></h5>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('tablero') }}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{ url('admin/planificaciones') }}"> Planificacíones</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel-heading">
            	<em>Planificaciones de empleados</em>
            </div>
            <div class="panel-body">   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                       		<table class="table table-bordered">
								<thead>
									<tr>
										@for($i = 0; $i <= $dias; $i++)
											<td style="width: 200px; font-size: 10px;" class="text-center">{{ dias($fechas[$i]) }}</td>
											<?php $dia_id[]=$planificacion->dias[$i]->id; ?>
										@endfor
									</tr>
									<tr>
										@for($i = 0; $i <= $dias; $i++)
											<td style="width: 200px; font-size: 10px;" class="text-center">{{ $planificacion->dias[$i]->dia }}</td>
										@endfor
									</tr>
									<tr>
										@for($i = 0; $i <= $dias; $i++)
											@if($planificacion->dias[$i]->estatus == 'Laborable')
												<td style="width: 200px; font-size: 10px;" class="text-center text-info">		{{ $planificacion->dias[$i]->estatus }}
												</td>
											@else
												<td style="width: 200px; font-size: 10px;" class="text-center text-danger">		{{ $planificacion->dias[$i]->estatus }}
												</td>
											@endif
										@endfor
									</tr>	
								</thead>
							</table>
								
							<table class="table table-bordered">
								<thead>
									<tr>
										<td class="text-center">NOMBRES</td>
										@for($i = 0; $i <= $dias; $i++)
											<td style="width: 200px; font-size: 10px;" class="text-center">{{ dias($fechas[$i]) }}</td>
											<?php $dia_id[]=$planificacion->dias[$i]->id; ?>
										@endfor
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>		
										<td colspan="{{ count($fechas) }}" class="text-center"> MAÑANA </td>
									</tr>
									@foreach($empleados as $empleado)
										<tr>
											@if($empleado->ems->turno->turno == 'Mañana')
												<td style="width: 15%;">
													{{ $empleado->ems->full_name }}
												</td>

												@for($j=0; $j <= $dias; $j++)
													<td class="text-center">
														@if(asignados($empleado->ems->id,$dia_id[$j],$planificacion->id))
															<span class="fa fa-check"></span>
														@endif
													</td>
												@endfor
											@endif
										</tr>
									@endforeach
									<tr>
										<td></td>	
										<td colspan="{{ count($fechas) }}" class="text-center"> NOCHE </td>
									</tr>
									@foreach($empleados as $empleado)
										<tr>
											@if($empleado->ems->turno->turno == 'Noche')
												<td style="width: 15%;">
													{{ $empleado->ems->full_name }}
												</td>

												@for($i=0; $i <= $dias; $i++)
													<td class="text-center">
														@if(asignados($empleado->ems->id,$dia_id[$i],$planificacion->id))
															<span class="fa fa-check"></span>
														@endif
													</td>
												@endfor
											@endif
										</tr>
									@endforeach
									<tr>
										<td></td>
										<td colspan="{{ count($fechas) }}"></td>
									</tr>
								</tbody>
							</table>	
                        </div> 
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>


@endsection