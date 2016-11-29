<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Empleado</th>
            <th>Turno</th>
            <th>Cargo</th>
            <th>Planificación</th>
        </tr>
    </thead>
    <tbody> 
    @if(isset($planning_em))
        @foreach($planning_em as $key => $planificacion)
            @foreach($planificacion as $planning_list)
                <tr>
                    <td class="col-md-1">
                        <a href="{{ route('admin.empleados.edit', [$planificacion[$key]->id]) }}">
                            {{ $indice = $indice+1 }}
                        </a>
                    </td>
                    <td class="col-md-3"> 
                        <a href="{{ route('admin.empleados.edit', [$planificacion[$key]->id]) }}">
                            {{ $planning_list->ems->full_name }}
                        </a>
                    </td>
                    <td class="col-md-2"> 
                        <a href="{{ route('admin.empleados.edit', [$planificacion[$key]->id]) }}">
                            {{ $planning_list->ems->turno->turno }}
                        </a>
                    </td>
                    <td class="col-md-2"> 
                        <a href="{{ route('admin.empleados.edit', [$planificacion[$key]->id]) }}">
                            {{ $planning_list->ems->cargo->nombre }}
                        </a>
                    </td>
                    <td class="col-md-2"> 
                        <a href="{{ route('admin.empleados.edit', [$planificacion[$key]->id]) }}">
                            {{ $planning_list->planning->full_dates }}
                        </a>
                    </td>
                </tr>
            @endforeach 
        @endforeach
    @endif
    </tbody>
</table>                                    

