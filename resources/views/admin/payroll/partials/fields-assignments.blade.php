<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
        	<tr>
        		<th colspan="{{ $count+1 }}" class="text-center">ASIGNACIONES EXTRAS</th>
        	</tr>
            <tr>
                <th></th>
                @foreach($others_assignments as $others)
                    <th class="text-center">
                        {{ $others->nombre}}
                        <p class="text-success">
                            {{ number_format($others->valor, 2, ',', ' ') }}
                        </p>
                    </th>

                @endforeach
            </tr>
            <tr>
                <th colspan="{{ $count+1 }}">EMPLEADO</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($employees as $key => $employee)

        		{!! Form::hidden('mes', $mes) !!}
                {!! Form::hidden('quincena', $quincena) !!}
        		{!! Form::hidden('year', $year) !!}

            	<tr>
                	<td>
                		{{ $employee->fullname }}
                	</td>
                  @for($i=0; $i<$count; $i++)

                      {{-- */$j=0;/* --}}

                      @if(!empty($others_assignments_dx))

                          <td class="text-center">
                              @for($y=0; $y<count($others_assignments_dx); $y++)

                                  @if($others_assignments_dx[$y]->pivot->empleado_id == $employee->id AND $others_assignments_dx[$y]->pivot->asignacion_id == $others_assignments[$i]->id)

                                      {{-- */$j= 1;/* --}}

                                      <span class="fa fa-check"></span>

                                  @endif
                              @endfor

                                  @if($j == 0)
                                      <input type="checkbox" name="empleado_id[<?=$employee->id?>][]" value="{{ $others_assignments[$i]->id }}" title="Marqué la opción correspondiente a la asignación.">
                                  @endif
                          </td>
                      @else

                        <td class="text-center">
                            <input type="checkbox" name="empleado_id[<?=$employee->id?>][]" value="{{ $others_assignments[$i]->id }}" title="Marqué la opción correspondiente a la asignación.">
                        </td>

                    @endif

                    @endfor
            	</tr>
            @endforeach
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
