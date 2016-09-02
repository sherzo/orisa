<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Empleado</th>
            <th>Turno</th>
            <th>Cargo</th>
            <th>Planificación</th>
            <th class="center">Acciones</th>
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

                <td class="text-center">
                    <a class="btn btn-default btn-circle"> <span class="fa fa-eye"></span></a>
                    <a class="btn btn-warning btn-circle" href="{{ route('admin.empleados.edit', [$planificacion->id]) }}"><span class="fa fa-pencil"></span></a>
                    <a class="btn btn-danger btn-circle" href="{{ route('admin.empleados.destroy', [$planificacion->id]) }}" title="Eliminar"> <span class="fa fa-trash-o"></span></a> 
                </td>
            </tr> 
    @endforeach
    </tbody>
     <thead>
        <tr>
            <th>#</th>
            <th>Empleado</th>
            <th>Turno</th>
            <th>Cargo</th>
            <th>Planificación</th>
            <th class="center">Acciones</th>
        </tr>
    </thead>
</table>                                   