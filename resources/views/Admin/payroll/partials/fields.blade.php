<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
        	<tr>
        		<th colspan="2"></th>
        		<th colspan="5" class="text-center">ASIGNACIONES</th>
        		<th colspan="5" class="text-center">DEDUCCIONES</th>
        		<th></th>
        	</tr>
            <tr>
                <th>DNI</th>
                <th>EMPLEADO</th>
                <th>SALARIO MENSUAL</th>
                <th>SALARIO DIARIO</th>
                <th>TIEMPO ORDINAR.</th>
                <th>HORAS EXTRA</th>
                <th>TOTAL ASIG.</th>
                <th>ISLR</th>
                <th>SSO</th>
                <th>RPE</th>
                <th>RPVH</th>
                <th>TOTAL DEDUCCIONES</th>
                <th>NETO A COBRAR</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($employees as $key => $employee)

        		{!! Form::hidden('quincena', $quincena) !!}

        		{!! Form::hidden('mes', $mes) !!}

        		{!! Form::hidden('year', $year) !!}

            	<tr>
                	<td>
                		{{ $employee->dni_cedula }} {!! Form::hidden('cedula[]', $employee->dni_cedula) !!} 
                	</td>

                	<td>
                		{{ $employee->fullname }} {!! Form::hidden('nombre_completo[]', $employee->fullname) !!}
                	</td>
                	<td>
                		{{ number_format($employee->cargo->salario, 2, ',', ' ') }} {!! Form::hidden('salario_m[]', $employee->cargo->salario) !!} {!! Form::hidden('cargo[]', $employee->cargo->nombre) !!} 
                	</td>

                	<td>
                		{{ number_format($employee->cargo->salario/30, 2, ',', ' ') }} {!! Form::hidden('salario_d[]', $employee->cargo->salario/30) !!}
                	</td>

                	<td>
                		{{ $laborados[$key] }} {!! Form::hidden('laborados[]', $laborados[$key]) !!}
                	</td>
                	
                	<td>
                		{{ number_format($horasExtras[$key], 2, ',', ' ') }}
                	</td>

                	<td>
                		{{ number_format($assignmentsTotal[$key], 2, ',', ' ') }}
                	</td>

                	<td>
                		{{ number_format($islr[$key], 2, ',', ' ') }} {!! Form::hidden('islr[]', $islr[$key]) !!}
                	</td>

                	<td>
                		{{ number_format($sso[$key], 2, ',', ' ') }} {!! Form::hidden('sso[]', $sso[$key]) !!}
                	</td>

                	<td>
                		{{ number_format($rpe[$key], 2, ',', ' ') }} {!! Form::hidden('rpe[]', $rpe[$key]) !!}
                	</td>

                	<td>
                		{{ number_format($rpvh[$key], 2, ',', ' ') }} {!! Form::hidden('rpvh[]', $rpvh[$key]) !!}
                	</td>
                	<td>
                		{{ number_format($deductionsTotal[$key], 2, ',', ' ') }} 
                	</td>
                	<td>
                		{{ number_format($payments[$key], 2, ',', ' ') }}
                	</td>
            	</tr>
            @endforeach
            	<tr>
            		<td colspan="6"></td>
            		<td>TOTAL:</td>
            		<td colspan="5"></td>
            		<td>TOTAL:</td>
            	</tr>
        </tbody>
    </table>
</div>
<div class="col-lg-12">
    <br>
    <div class="form-group tooltip-demo text-center">
        <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
        <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
        <br>
    </div>  
</div>     