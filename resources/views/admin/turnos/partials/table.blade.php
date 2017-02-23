<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Empleado</th>
            <th>Turno</th>
            <th>Cargo</th>
            <th>Planificación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody> 
    @if(isset($planning_em))
        @foreach($planning_em as $key => $planificacion)
            @foreach($planificacion as $planning_list)
                <tr>
                    <td>
                        {{ $indice = $indice+1 }}
                    </td>
                    <td>
                        {{ $planning_list->ems->full_name }}
                    </td>
                    <td> 
                        {{ $planning_list->ems->turno->turno }}
                    </td>
                    <td> 
                        {{ $planning_list->ems->cargo->nombre }}
                    </td>
                    <td class="text-center"> 
                        {{ $planning_list->planning->full_dates }}
                    </td>
                    <td class="text-center tooltip-demo">
                        <a class="btn btn-default btn-xs" href="#" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
                        <a class="btn btn-default btn-xs" href="#" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar" onclick="planificacion({{ $planning_list->planificacion_id }}, {{ $planning_list->ems->id }})"><span class="glyphicon glyphicon-trash fa-2x" data-toggle="modal"  data-target="#myModal"></span></a>
                    </td>
                </tr>
            @endforeach 
        @endforeach
    @endif
    </tbody>
</table>                                    

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">ELIMINAR EMPLEADO DE LA PLANIFICACIÓN</h4>
            </div>
            <div class="modal-body">
                ¿Esta seguro que desea eliminar este empleado de la planificación en especifico, de hacerlo se alteraran los datos de la prenómina?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                {!! Form::open(['route' => ['admin.planificaciones.administrar.dias.turnos.destroy', 0133], 'method' => 'DELETE']) !!}
                    {{ csrf_field() }}
                    <input type="hidden" id="planificacion" name="id">
                    <input type="hidden" id="empleado" name="idem">
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>