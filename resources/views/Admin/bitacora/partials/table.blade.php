<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>Usuario</th>

			<th>Operacion</th>
      <th>Fecha</th>
      <th>Hora</th>
			<th>id Operacion</th>
		</tr>
	</thead>
	<tbody>
	@foreach($operaciones as $operacion)
    <tr>
      <td>{{ $operacion->user->name }}</td>

      <td>{{ $operacion->descripcion }} {{$operacion->operacion}}</td>
      <td>{{ fecha($operacion->created_at) }}</td>
      <td>{{ hora($operacion->created_at) }}</td>
      <td>
				<a>{{ $operacion->operacion_id }}</a>
			</td>
    </tr>
  @endforeach
