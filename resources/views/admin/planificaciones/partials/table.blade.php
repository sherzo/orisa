<table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
            <td> 
                 <a href="{{ route('admin.planificaciones.administrar', [$planificacion->id]) }}" title="Administrar">
                    {{ $planificacion->id }}
                </a>
            </td>
            <td> 
                <a href="{{ route('admin.planificaciones.administrar', [$planificacion->id]) }}" title="Administrar">
                    {{ $planificacion->fecha_inicio }}
                </a>
            </td>
            <td> 
                <a href="{{ route('admin.planificaciones.administrar', [$planificacion->id]) }}" title="Administrar">
                    {{ $planificacion->fecha_final }}
                </a>
            </td>
            <td> 
                <a href="{{ route('admin.planificaciones.administrar', [$planificacion->id]) }}" title="Administrar">
                    {{ $planificacion->estatus }}
                </a>
            </td>
            <td class="text-center">
                <a class="btn btn-primary btn-xs" href="{{ route('admin.planificaciones.administrar', $planificacion->id) }}" title="Administrar"><span class="fa fa-calendar-o fa-2x"></span></a>
                <a href="{{ route('admin.planificaciones.destroy', $planificacion->id) }}" class="btn btn-danger btn-xs" title="Borrar"> <span class="fa fa-trash-o fa-2x"></span> </a> </td>
            </td>
	   </tr>
        @endforeach           
    </tbody>
</table>

