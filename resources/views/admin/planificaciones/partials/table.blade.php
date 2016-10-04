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
            <td class="text-center tooltip-demo">                     
                <a class="btn btn-default btn-xs" href="{{ route('admin.planificaciones.administrar', $planificacion->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Administrar"><span class="glyphicon glyphicon-calendar fa-2x"></span></a>
                <a href="{{ route('admin.planificaciones.destroy', $planificacion->id) }}" class="btn btn-default btn-xs" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
            </td>
	   </tr>
        @endforeach           
    </tbody>
</table>

