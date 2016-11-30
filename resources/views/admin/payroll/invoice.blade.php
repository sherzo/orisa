<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Prenómina</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
	<table class="table">
        <thead>
            <tr>
                <th>CÉDULA</th>
                <th>NOMBRES</th>
                <th>CARGO</th>
                <th>ASIGNACIONES EXTRA</th>
                <th>DEDUCCIONES EXTRA</th>
            	<th>LABORADOS</th>
            	<th>NO LABORADOS</th>
            	<th>TOTAL</th>
            </tr>
       	</thead>
        <tbody>
		@foreach($payroll as $payroll_show)
        	<tr>
                <td>
           	        {{ $payroll_show->cedula }}
                </td>
                <td>
                    {{ $payroll_show->nombre_completo }}
                </td>
                <td>
                    {{ $payroll_show->cargo }}
                </td>
                <td>
                    {{ $payroll_show->asignaciones_ext }}
                </td>
                <td>
                    {{ $payroll_show->deducciones_ext }}
                </td>
               	<td>
               		{{ $payroll_show->laborados }}
               	</td>
               	<td>
               		{{ $payroll_show->no_laborados }}
               	</td>
                <td>
                    {{ $payroll_show->salario_total }}
                </td>
            </tr>
		@endforeach
	 	</tbody>
    </table>
</body>
</html>