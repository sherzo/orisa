<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre de la salsa</th>
			<th>Acciones</th>
		</tr>
	</thead>

    <tbody>
    @foreach($sauces as $sauce)
        <tr>
            <td>{{ $sauce->id }}</td>
            <td>{{ $sauce->salsa }}</td>
            <td class="text-center">
              <a class="btn btn-default btn-xs" href="{{ route('admin.sauces.show', $sauce->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver"><span class="glyphicon glyphicon-eye-open fa-2x"></span></a>
              <a class="btn btn-default btn-xs" href="{{ route('admin.sauces.edit', $sauce->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
