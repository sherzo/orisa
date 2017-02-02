<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Mesa</th>
            <th>Cliente</th>
            <th>Fecha y Hora</th>
            <th>Total (bs)</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </thead>
   	<tbody> 
        @foreach($comandas as $comanda)
            <tr class="even gradeA">
                <td>{{ $comanda->id }}</td>
                <td>{{ $comanda->id }}</td>
                <td>{{ $comanda->client[0]->nombre }}</td>
              	<td>{{ $comanda->updated_at }}</td>
                <td>{{ $comanda->client[0]->pivot->total }}</td>
				<td><span class="label label-success">
					{{ $comanda->estatus}}
				</span></td>
				<td>
					<a class="btn btn-default btn-xs" href="{{ route('admin.comandas.show', $comanda->id)}}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></span></a>

                    <a class="btn btn-default btn-xs" href="{{ route('admin.recibo', $comanda->id)}}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Impirmir"><span class="glyphicon glyphicon-print fa-2x"></span></a>
				</td>
             </tr>
            @endforeach
</tbody></table>    