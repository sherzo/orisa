
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
                            {!! Form::hidden('quicena', $quincena) !!}
                    		{!! Form::hidden('year', $year) !!}

                        	<tr>
                            	<td>
                            		{{ $employee->dni_cedula }} {!! Form::hidden('cedula[]', $employee->dni_cedula) !!}
                            	</td>

                            	<td>
                            		{{ $employee->fullname }} {!! Form::hidden('nombre_completo[]', $employee->fullname) !!}
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
                                    {!! Form::hidden('islr[]', $islr[$key]) !!}
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
                        		<td colspan="4"></td>
                        		<td>TOTAL: {{ number_format($totalAllassignments, 2, ',', ' ') }}</td>
                        		<td colspan="4"></td>
                        		<td> TOTAL: {{ number_format($totalAllpayments, 2, ',', ' ') }}</td>
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
                        <th colspan="{{ $count+1 }}" class="text-center">
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
                    @foreach($assignments as $assignment)
                        <tr>
                            <td>
                                {{ $assignment->nombre }}
                            </td>
                            @for($i=0; $i<$count; $i++)
                                <td class="text-center">
                                    @if(!empty($others_assignments))
                                        @for($j=0; $j<count($others_assignments); $j++)

                                               @if($others_assignments[$j]->empleado_id == $employees[$i]->id AND $others_assignments[$j]->asignacion_id == $assignment->id)
                                                    <span class="fa fa-check"></span>
                                                @endif

                                        @endfor
                                    @endif
                                </td>
                            @endfor
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="tab-pane fade" id="deductions">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="{{ $count+1 }}" class="text-center">
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
                    @foreach($deductions_extra as $deductions_extra)
                        <tr>
                            <td>
                                {{ $deductions_extra->nombre }}
                            </td>
                            @for($i=0; $i<$count; $i++)
                                <td class="text-center">
                                    @if(!empty($others_deductions))
                                        @for($b=0; $b<count($others_deductions); $b++)

                                            @if($others_deductions[$b]->empleado_id == $employees[$i]->id AND $others_deductions[$b]->deduccion_id == $deductions_extra->id)
                                                <span class="fa fa-check"></span>
                                            @endif
                                        @endfor
                                    @endif
                                </td>
                            @endfor
                        </tr>
                    @endforeach
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
                      @foreach($employees as $key => $employee)
                          <tr>
                              <td>
                                  {{ $employee->fullname }} {!! Form::hidden('nombre_completo[]', $employee->fullname) !!}
                              </td>
                              <td>
                                  {{ $employee->cargo->nombre }}
                              </td>
                              <td>
                                  {{ number_format($employee->cargo->salario, 2, ',', ' ') }} {!! Form::hidden('salario_m[]', $employee->cargo->salario) !!} {!! Form::hidden('cargo[]', $employee->cargo->nombre) !!}
                              </td>
                              <td>
                                  {{ number_format($employee->cargo->salario/30, 2, ',', ' ') }} {!! Form::hidden('salario_d[]', $employee->cargo->salario/30) !!}
                              </td>
                          </tr>
                      @endforeach
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
                          <th>FALTAS</th>
                          <th>TOTAL DESCUENTO</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($employees as $key => $employee)

                      @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
