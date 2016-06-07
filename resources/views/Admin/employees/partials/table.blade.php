<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th> Nombres</th>
      <th> Apellidos</th>
      <th> Telefono </th>
      <th> Género </th>
      <th> Acciones</th>
    </tr>
  </thead>
<tbody>
  @foreach($employees as $employee)
    <tr>
      <td>{{ $employee->names_em }}</td>
      <td>{{ $employee->surnames_em }}</td>
      <td>{{ $employee->phone_em }}</td>
      <td>{{ $employee->gender_em }}</td>
      <td class="text-center">
        <a class="btn btn-default btn-xs"> <span class="fa fa-eye fa-2x"></span> </a>
        <a class="btn btn-default btn-xs" href="{{ route('admin.employees.edit', $employee) }}"> <span class="fa fa-pencil fa-2x"></span> </a>
        <a class="btn btn-default btn-xs"> <span class="fa fa-trash-o fa-2x"></span> </a>
      </td>
    </tr>
  @endforeach
                               
</tbody>
</table>
