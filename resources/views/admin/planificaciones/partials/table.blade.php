<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th><center><input type="checkbox" id="select_all" /></center></th>
            <th>Inicio</th>
            <th>Final</th>
            <th>Estatus</th>
        </tr>
    </thead>
    <tbody>
        @foreach($planificaciones as $planificacion)
	    <tr>
            <td> <center><input type="checkbox" name="id[]" value="{{ $planificacion->id }}"/></center> </td>
            <td> {{ $planificacion->fecha_inicio }}</td>
            <td> {{ $planificacion->fecha_final }}</td>
            <td> {{ $planificacion->estatus }}</td>
	   </tr>
        @endforeach           
    </tbody>
</table>

