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
                
                <td> 
                    <a href="#">
                        05-12-1994
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>