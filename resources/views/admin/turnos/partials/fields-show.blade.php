<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Planificación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody> 
        @foreach($planificaciones as $key => $planificacion)
            <tr>
                <td style="width: 50px;" class="text-center">
                    {{ $indice = $indice+1 }}
                </td>
                <td>
                    {{ $planificacion->planning->full_dates }}
                </td>
                <td class="text-center tooltip-demo">
                    <a class="btn btn-default btn-xs" href="{{ route('admin.planificaciones.administrar.dias.turnos.show', [$planificacion->planificacion_id]) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></span></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  