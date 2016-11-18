<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Mesa</th>
            <th>Subtotal</th>
            <th>Total (bs)</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </thead>
   	<tbody> 
        @foreach($comandas as $comanda)
            <tr class="even gradeA">
                <td>{{ $comanda->id }}</td>
                <td>{{ $comanda->id}}</td>
              	<td>{{ $comanda->subtotal }}</td>
                <td>{{ $comanda->total }}</td>
				<td>{{ $comanda->estatus}}</td>
				<td></td>
             </tr>
</tbody></table>