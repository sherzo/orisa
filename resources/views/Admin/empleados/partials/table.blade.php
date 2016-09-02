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
                <td class="text-center">
                    <a class="btn btn-default btn-circle"> <span class="fa fa-eye"></span> </a>
                    <a class="btn btn-warning btn-circle" href="{{ route('admin.empleados.edit', [$empleado->id]) }}"><span class="fa fa-pencil"></span></a>
                    <a class="btn btn-danger btn-circle" href="{{ route('admin.empleados.destroy', [$empleado->id]) }}" title="Eliminar"> <span class="fa fa-trash-o"></span></a>
                </td>
            </tr> 
        @endforeach
    </tbody>
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
</table> 
