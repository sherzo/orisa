<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Salsa</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>                 
    @foreach($sauces as $sauce)
        <tr>
            <td>{{ $sauce->id }}</td>
            <td>{{ $sauce->salsa }}</td>                                   
            <td class="text-center">
                <a class="btn btn-default btn-xs" title="Ver">
                    <span class="fa fa-eye fa-2x"></span>
                </a>
                <a class="btn btn-default btn-xs" href="{{ route('admin.sauces.edit', $sauce) }}" title="Editar">
                    <span class="fa fa-pencil fa-2x"></span>
                </a>
                <a href="{{ route('admin.sauces.destroy', $sauce->id) }}" class="btn btn-default btn-xs" title="Eliminar">
                    <span class="fa fa-trash-o fa-2x"></span>
                </a>
            </td>
        </tr>
    @endforeach                         
    </tbody>
</table>