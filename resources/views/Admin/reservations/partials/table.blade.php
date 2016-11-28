<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
      <th>Mesa</th>
      <th>Cliente</th>
			<th>Fecha de solicitud</th>
      <th>Fecha de Reservación</th>
			<th>Hora</th>
			<th>Estatus</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
    @foreach($reservaciones as $reservacion)
      <tr>
        <td align="center

        "><img class="img-responsive" width="25" height="25" src="{{ asset('img/tables/')}}/mesa-{{ $reservacion->table->id }}.png"></td>
        <td>{{ $reservacion->client->nombre }}</td>
        <td>{{ $reservacion->fecha_solicitud}}</td>
        <td>{{ $reservacion->fecha_reservacion }}</td>
        <td>{{ $reservacion->hora_reservacion }}</td>
        <td> <label class="label label-warning">{{ $reservacion->estatus }}</label></td>
        <td>
          <a
           class="btn btn-default btn-xs" href="{{ route('admin.reservaciones.edit', $reservacion->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
        </td>
      </tr>
    @endforeach
  </tbody>
