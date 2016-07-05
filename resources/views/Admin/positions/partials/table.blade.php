@include('flash::message')  

<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th> Código </th>
      <th> Cargo </th>
      <th> Remuneración </th>
      <th> Acciones </th>
    </tr>
  </thead>
<tbody>
  @foreach($positions as $position)
    <tr>
      <td align="center">{{ $position->id }}</td>
      <td>{{ $position->codigo_cgo }}</td>
      <td>{{ $position->nombre_cgo }}</td>
      <td>{{ $position->salario_cgo }}</td>
      <td class="text-center">
        <a class="btn btn-default btn-xs" href="{{ route('admin.cargos.edit', $position) }}"> <span class="fa fa-pencil fa-2x"></span> </a>
        <a href="{{ route('admin.cargos.destroy', $position->id) }}" class="btn btn-default btn-xs" title="Eliminar"> <span class="fa fa-trash-o fa-2x"></span> </a>
      </td>
    </tr>
  @endforeach                       
</tbody>
</table>
