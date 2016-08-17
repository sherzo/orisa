<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Creada</th>
            <th>Día</th>
            <th>Estatus</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dias as $dia)
	    <tr>
            <td> {{ $dia->id }} </td>
            <td> {{ $dia->planif->fecha_inicio }} - {{ $dia->planif->fecha_final }}</td>
            <td> {{ $dia->planif->created_at }} </td>
            <td> {{ $dia->dia }}</td>
            <td> {{ $dia->estatus }}</td>
            <td class="text-center">
                <a class="btn btn-warning btn-xs" href="{{ route('admin.planificaciones.administrar.dias.edit', $dia->id) }}"><span class="fa fa-pencil fa-2x"></span></a>
            </td>
	   </tr>
        @endforeach           
    </tbody>
</table>

