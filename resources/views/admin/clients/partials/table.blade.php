<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>                 
    @foreach($clients as $client)
        <tr>
            <td>
                {{ $client->id }}
            </td>
            <td>
                {{ $client->dni_cedula }}
            </td>
            <td>
                {{ $client->nombre }}
            </td>
            <td>
                {{ $client->operadora }}-{{ $client->telefono }}
            </td>                      
            <td class="text-center tooltip-demo">                     
                <a class="btn btn-default btn-xs" href="{{ route('admin.clientes.edit', $client) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
                <a class="btn btn-default btn-xs" href="{{ route('admin.clientes.destroy', $client->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash fa-2x"></span></a>
            </td>             
        </tr>
    @endforeach                         
    </tbody>
</table>