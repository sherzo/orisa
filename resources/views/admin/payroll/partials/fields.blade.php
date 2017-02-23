
    <div class="form-group">
        <a href="{{ url('admin/agregar_asignaciones', [$year,$mes,$quincena]) }}"><button type="button" class="btn btn-default">ASIGNACIONES</button></a>
        <a href="{{ url('admin/agregar_deducciones', [$year,$mes,$quincena]) }}"><button type="button" class="btn btn-default">DEDUCCIONES</button></a>
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">INICIO</a></li>
        <li><a href="#assignments" data-toggle="tab">ASIGNACIONES EXTRAS</a></li>
        <li><a href="#deductions" data-toggle="tab">DEDUCCIONES EXTRAS</a></li>
        <li><a href="#payments" data-toggle="tab">SALARIOS</a></li>
        <li><a href="#cestaticket" data-toggle="tab">CESTATICKET</a></li>
    </ul>
    <br>

    <div class="tab-content">
        <div class="tab-pane fade in active" id="home">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    	<tr>
                    		<th colspan="2"></th>
                    		<th colspan="3" class="text-center">ASIGNACIONES</th>
                    		<th colspan="4" class="text-center">DEDUCCIONES</th>
                    		<th></th>
                    	</tr>
                        <tr>
                            <th>DNI</th>
                            <th>EMPLEADO</th>
                            <th>TIEMPO ORDINAR.</th>
                            <th>HORAS EXTRA</th>
                            <th>TOTAL ASIG.</th>
                            <th>SSO</th>
                            <th>RPE</th>
                            <th>RPVH</th>
                            <th>TOTAL DEDUCCIONES</th>
                            <th>NETO A COBRAR</th>
                        </tr>
                    </thead>
                    <tbody>

                    	@foreach($employees as $key => $employee)

                    		{!! Form::hidden('mes', $mes) !!}
                            {!! Form::hidden('quincena', $quincena) !!}
                    		{!! Form::hidden('year', $year) !!}

                        	<tr>
                            	<td>
                            		{{ $employee->dni_cedula }} {!! Form::hidden('cedula[]', $employee->dni_cedula) !!}
                            	</td>

                            	<td>
                            		{{ $employee->fullname }} {!! Form::hidden('nombre_completo[]', $employee->fullname) !!}
                            	</td>
                            	<td class="text-center">
                            		{{ laborados($employee->id,$assistances) }}
                            	</td>
                            	<td class="text-center">
                            		{{ horasExtras($employee->id,$assistances) }}
                            	</td>
                            	<td class="text-center">
                                    {{ totalAsignacion(horasExtras($employee->id,$assistances), $employee) }}
                                </td>
                            	<td>
                            		{{ sso($employee,$deductions->SSO,$i,$f) }}
                            	</td>
                            	<td>
                            		{{ rpe($employee,$deductions->RPE,$i,$f) }}
                            	</td>

                            	<td>
                            		
                            	</td>
                            	<td>
                            		
                            	</td>
                            	<td>
                            		
                            	</td>
                        	</tr>
                        @endforeach
                        	<tr>
                        		<td colspan="4"></td>
                        		<td>TOTAL: </td>
                        		<td colspan="4"></td>
                        		<td> TOTAL: </td>
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
        </div>
    <div class="tab-pane fade" id="assignments">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="" class="text-center">
                            ASIGNACIONES EXTRAS
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center">
                            Nombres
                        </th>
                        @foreach($employees as $employee)
                            <th>
                                {{ $employee->nombres }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="tab-pane fade" id="deductions">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="" class="text-center">
                            DEDUCCIONES EXTRAS
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center">
                            Nombres
                        </th>
                        @foreach($employees as $employee)
                            <th>
                                {{ $employee->nombres }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="tab-pane fade" id="payments">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>EMPLEADO</th>
                          <th>CARGO</th>
                          <th>SALARIO MENSUAL</th>
                          <th>SALARIO DIARIO</th>
                      </tr>
                  </thead>
                  <tbody>
                      
                  </tbody>
            </table>
        </div>
    </div>
    <div class="tab-pane fade" id="cestaticket">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>EMPLEADO</th>
                        <th>UNIDAD TRIBUTARIA</th>
                        <th>CESTATICKET</th>
                        <th>FALTAS</th>
                        <th>TOTAL DESCUENTO</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>