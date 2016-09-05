<table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
            <td> 
                <a href="{{ route('admin.planificaciones.administrar.dias.edit', [$dia->id]) }}">
                    {{ $dia->id }} 
                </a>
            </td>
            <td> 
                <a href="{{ route('admin.planificaciones.administrar.dias.edit', [$dia->id]) }}">
                    {{ $dia->planif->fechas }} 
                </a>
            </td>
            <td> 
                <a href="{{ route('admin.planificaciones.administrar.dias.edit', [$dia->id]) }}">
                    {{ $dia->planif->created_at }} 
                </a>
            </td>
            <td> 
                <a href="{{ route('admin.planificaciones.administrar.dias.edit', [$dia->id]) }}">
                    {{ $dia->dia }}
                </a>
            </td>
            <td> 
                <a href="{{ route('admin.planificaciones.administrar.dias.edit', [$dia->id]) }}">
                    {{ $dia->estatus }}
                </a>
            </td>
            <td class="text-center">
                <a class="btn btn-warning btn-xs" href="{{ route('admin.planificaciones.administrar.dias.edit', $dia->id) }}"><span class="fa fa-pencil fa-2x"></span></a>
            </td>
	   </tr>
        @endforeach           
    </tbody>
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
</table>