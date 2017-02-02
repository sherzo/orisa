<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
    <tr>
        <th>ARCHIVO</th>
        <th>TAMAÑO</th>
        <th>FECHA</th>
        <th>ACCIONES</th>
    </tr>
    </thead>
    <tbody>
    @foreach($backups as $backup)
        <tr>
            <td>
                {{ $backup['file_name'] }}
            </td>
            <td>
               {{ $backup['file_size'] }} KB
            </td>
            <td>
                {{ $backup['last_modified'] }}
            </td>
            <td class="text-center">
                <a class="btn btn-default btn-xs" href="{{ route('backup.download', $backup['file_name']) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descargar"><span class="glyphicon glyphicon-download-alt fa-2x"></span></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>