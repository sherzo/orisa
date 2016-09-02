<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th> # </th>
            <th> Cédula </th>
            <th> Nombres </th>
            <th> Apellidos </th>
            <th> Teléfono </th>
            <th> Género </th>
            <th> Acciones </th>
        </tr>
    </thead>
@foreach($employees as $employee)
    <tbody>
        <tr>
            <td> </td>
            <td> {{ $employee->dni_cedula }} </td>
            <td> {{ $employee->nombres }} </td>
            <td> {{ $employee->apellidos}}  </td>
            <td> {{ $employee->telefono}} </td>
            <td> {{ $employee->genero}} </td>
            <td class="text-center">
                <a class="btn btn-default btn-xs"> <span class="fa fa-eye fa-2x"></span> </a>
                <a class="btn btn-default btn-xs" href="{{ route('admin.employees.edit', $employee) }}"><span class="fa fa-pencil fa-2x"></span> </a>

                <a href="{{ route('admin.employees.destroy', $employee->id) }}" class="btn btn-default btn-xs" title="Eliminar"> <span class="fa fa-trash-o fa-2x"></span> </a> </td>
        </tr>                               
    </tbody>
@endforeach
</table>
