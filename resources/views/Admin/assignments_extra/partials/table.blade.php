<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Valor</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody> 
    @foreach($others_assignments as $assignments)
            <tr>
                <td class="col-md-1">
                    <a href="{{ route('admin.asignaciones_extras.edit', [$assignments->id]) }}">
                        {{ $assignments->id }}
                    </a>
                </td>
                <td class="col-md-3"> 
                    <a href="{{ route('admin.asignaciones_extras.edit', [$assignments->id]) }}">
                        {{ $assignments->nombre }}
                    </a>
                </td>
                <td class="col-md-3"> 
                    <a href="{{ route('admin.asignaciones_extras.edit', [$assignments->id]) }}">
                        {{ $assignments->valor }}
                    </a>
                </td>
                <td>
                </td>
                <td class="text-center tooltip-demo">
                    <a class="btn btn-default btn-xs" href="{{ route('admin.asignaciones_extras.edit', $assignments) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
                    <a class="btn btn-default btn-xs" href="" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
                </td>
            </tr> 
    @endforeach
    </tbody>
</table>   