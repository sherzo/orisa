<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Empleado</th>
            <th>Fecha</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody> 
        @foreach($asistencias as $asistencia)
            <tr class="even gradeA">
                <td> 
                    <a href="#">
                        {{ $asistencia->id }}
                    </a>
                </td>
                <td> 
                    <a href="#">
                        {{ $asistencia->personal->nombres }}
                    </a>
                </td>
                <td> 
                    <a href="#">
                        {{ $asistencia->attendays->fecha }}
                    </a>
                </td>
                <td> 
                    <a href="#">
                        {{ $asistencia->hora_entrada }}
                    </a>
                </td>
                <td> 
                    <a href="#">
                        {{ $asistencia->hora_salida }}
                    </a>
                </td>
                <td class="text-center tooltip-demo">                     
                    <a class="btn btn-default btn-xs" href="{{ route('admin.asistencias.edit', [$asistencia->id]) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></span></a>
                    <a class="btn btn-default btn-xs" href="{{ route('admin.asistencias.destroy', [$asistencia->id]) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
                    <a href="" class="btn btn-default btn-xs" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>