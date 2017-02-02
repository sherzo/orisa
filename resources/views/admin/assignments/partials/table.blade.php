<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Turno</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody> 
    @foreach($turns as $turns)
            <tr>
                <td class="col-md-1">
                    <a href="{{ route('admin.asignaciones.edit', [$turns->id]) }}">
                        {{ $turns->id }}
                    </a>
                </td>
                <td class="col-md-3"> 
                    <a href="{{ route('admin.asignaciones.edit', [$turns->id]) }}">
                        {{ $turns->turno }}
                    </a>
                </td>
                <td class="col-md-3"> 
                    <a href="{{ route('admin.asignaciones.edit', [$turns->id]) }}">
                        {{ $turns->hora_entrada }}
                    </a>
                </td>
                <td class="col-md-3"> 
                    <a href="{{ route('admin.asignaciones.edit', [$turns->id]) }}">
                        {{ $turns->hora_salida }}
                    </a>
                </td>
                <td class="text-center tooltip-demo">
                    <a class="btn btn-default btn-xs" href="{{ route('admin.asignaciones.edit', $turns) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
                    <a class="btn btn-default btn-xs" href="" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
                </td>
            </tr> 
    @endforeach
    </tbody>
</table>                                    
