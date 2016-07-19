@include('flash::message')  

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th> Empleados   </th>
            <th> Turno </th>
            <th> Fecha </th>
        </tr>
    </thead>
<tbody>
@foreach($employees as $employee)
	<tr>
		<td> </td>
		<td> {{ $employee->nombres_em }} </td>
		<td> </td>
		<td> </td>
	</tr>
@endforeach           
</tbody>
</table>