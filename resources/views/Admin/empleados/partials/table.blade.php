<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Género</th>
            <th class="center">Acciones</th>
        </tr>
    </thead>
    <tbody> 
        @foreach($empleados as $empleado)
            <tr class="even gradeA">
                <td> 
                    <a href="{{ route('admin.empleados.edit', [$empleado->id]) }}">
                        {{ $empleado->id }} 
                    </a>
                </td>
                <td> 
                    <a href="{{ route('admin.empleados.edit', [$empleado->id]) }}">
                        {{ $empleado->dni_cedula }} 
                    </a>
                </td>
                <td> 
                    <a href="{{ route('admin.empleados.edit', [$empleado->id]) }}">
                        {{ $empleado->nombres }}
                    </a> 
                </td>
                <td>  
                    <a href="{{ route('admin.empleados.edit', [$empleado->id]) }}">
                        {{ $empleado->apellidos}} 
                    </a>  
                </td>
                <td> 
                    <a href="{{ route('admin.empleados.edit', [$empleado->id]) }}">
                        {{ $empleado->telefono}}
                    </a>  
                </td>
                <td>
                    <a href="{{ route('admin.empleados.edit', [$empleado->id]) }}">
                        {{ $empleado->genero}} 
                    </a>  
                </td>
                <td class="text-center tooltip-demo">                     
                    <a class="btn btn-default btn-xs" href="" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></span></a>
                    <a class="btn btn-default btn-xs" href="{{ route('admin.empleados.edit', [$empleado->id]) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
                    <a href="{{ route('admin.empleados.destroy', [$empleado->id]) }}" class="btn btn-default btn-xs" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
                </td>
            </tr> 
        @endforeach
    </tbody>
</table> 
