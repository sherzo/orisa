<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Comienza</th>
            <th>Finaliza</th>
            <th>Estatus</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($planificaciones as $planificacion)
	    <tr>
            <td> {{ $planificacion->id }}</td>
            <td> {{ $planificacion->fecha_inicio }}</td>
            <td> {{ $planificacion->fecha_final }}</td>
            <td> {{ $planificacion->estatus }}</td>
            <td class="text-center">
                <a class="btn btn-primary btn-xs" href="{{ route('admin.planificaciones.administrar', $planificacion->id) }}" title="Administrar"><span class="fa fa-calendar-o fa-2x"></span></a>
                <!-- <a class="btn btn-warning btn-xs" href="{{ route('admin.planificaciones.administrar', $planificacion->id) }}"><span class="fa fa-pencil fa-2x"></span> </a> -->
                <a href="{{ route('admin.planificaciones.destroy', $planificacion->id) }}" class="btn btn-danger btn-xs" title="Borrar"> <span class="fa fa-trash-o fa-2x"></span> </a> </td>
            </td>
	   </tr>
        @endforeach           
    </tbody>
</table>

