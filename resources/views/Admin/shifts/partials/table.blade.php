@include('flash::message')  

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th> Empleado </th>
            <th> Turno </th>
            <th> Acciones </th>
        </tr>
    </thead>
<tbody>
@foreach($employee_has_shifts as $employee_has_shift)
    <tr>
        <td align="center">{{ $employee_has_shift->id }}</td>
        <td>{{ $employee_has_shift->id_employee }}</td>
        <td>{{ $employee_has_shift->id_shift }}</td>
        <td class="text-center">
            <a class="btn btn-default btn-xs" href="#">   <span class="fa fa-pencil fa-2x"></span>
            </a>
        <a href="#" class="btn btn-default btn-xs" title="Eliminar"> 
            <span class="fa fa-trash-o fa-2x"></span>
        </a>
      </td>
    </tr>
@endforeach                       
</tbody>
</table>
