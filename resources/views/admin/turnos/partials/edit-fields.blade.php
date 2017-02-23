
{{-- */$k=0;/* --}}
{{-- */$n=0;/* --}}

<div class="panel-body">
    <div class="col-lg-18">
        <table class="table table-striped table-bordered table-hover">
            <tr>
            	<td></td>
            	@foreach($dias as $dia)
            		<td class="text-center"> 
            			  <span type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $dia->dia }}"><p class="text-info">Fecha</p></span>{!! Form::hidden('planificacion_id', $id) !!}
            		</td>
            					
            		{{-- */$day[$k] = $dia->id;/* --}}
            		{{-- */$k++;/* --}}

            	@endforeach
            </tr>
            	@foreach($empleados as $empleado)
            		<tr>
            			<td> 
            			    {{ $empleado->full_name }}
                            {{-- */$empleado_id[$n] = $empleado->id;/* --}}
            			</td>

            			@for($m=0; $m<$k; $m++)
            				<td class="text-center">

            				    {{-- */$j=0;/* --}}

            					@for($y=0;$y<count($planificacion);$y++)

                                    @if($planificacion[$y]->empleado_id == $empleado_id[$n] AND $planificacion[$y]->dia_id == $day[$m])

                                        {{-- */$j= 1;/* --}}
                                        <input type="checkbox" name="empleado_id[<?=$empleado->id?>][]" value="{{$day[$m]}}" title="Marqué la opción correspondiente al día laboral del empleado" checked = "checked">
                                                        
                                    @endif
                                @endfor

                                @if($j == 0)

                                    <input type="checkbox" name="empleado_id[<?=$empleado->id?>][]" value="{{$day[$m]}}" title="Marqué la opción correspondiente al día laboral del empleado">

                                @endif

            				</td>
            			@endfor
            		</tr>

            		{{-- */$n++;/* --}}

            	@endforeach
        </table>
        <div class="col-lg-12">
            <hr>
            <div class="form-group tooltip-demo text-center">
                <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
                <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
                <br>
            </div>  
        </div>      
    </div>
</div>