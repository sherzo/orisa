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
    @foreach($planificaciones as $planificacion)

        <?php 
            $empleado = $planificacion->ems;
            $dias = $planificacion->day;
            $planif = $dias->planif;
            $cargo = $empleado->cargo;
            $turno = $empleado->turno;
        ?>
            <tr>
                <td class="col-md-1">
                    <a href="{{ route('admin.empleados.edit', [$planificacion->id]) }}">
                        {{ $planificacion->id }}
                    </a>
                </td>
                <td class="col-md-3"> 
                    <a href="{{ route('admin.empleados.edit', [$planificacion->id]) }}">
                        {{ $empleado->full_name }}
                    </a>
                </td>
                <td class="col-md-2"> 
                    <a href="{{ route('admin.empleados.edit', [$planificacion->id]) }}">
                        {{ $turno->turno }}
                    </a>
                </td>
                <td class="col-md-2"> 
                    <a href="{{ route('admin.empleados.edit', [$planificacion->id]) }}">
                        {{ $cargo->nombre }}
                    </a>
                </td>
                <td class="col-md-2"> 
                    <a href="{{ route('admin.empleados.edit', [$planificacion->id]) }}">
                        {{ $planif->fechas }}
                    </a>
                </td>
                <td class="text-center tooltip-demo">                     
                    <a class="btn btn-default btn-xs" href="" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></span></a>
                    <a class="btn btn-default btn-xs" href="{{ route('admin.planificaciones.administrar.dias.turnos.edit', [$planificacion->id]) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
                    <a href="{{ route('admin.empleados.destroy', [$planificacion->id]) }}" class="btn btn-default btn-xs" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
                </td>
            </tr> 
    @endforeach
    </tbody>
</table>                                    

