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
                
                <td class="text-center"> 
                    <a href="#">
                        <a class="btn btn-default btn-circle"> <span class="fa fa-eye"></span> </a>
                        <a class="btn btn-warning btn-circle" href="{{ route('admin.asistencias.edit', [$asistencia->id]) }}"><span class="fa fa-pencil"></span></a>
                        <a class="btn btn-danger btn-circle" href="{{ route('admin.asistencias.destroy', [$asistencia->id]) }}" title="Eliminar"> <span class="fa fa-trash-o"></span></a>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>