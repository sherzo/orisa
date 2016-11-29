<div class="col-lg-18">
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <td class="text-center">
                
            </td>
            @foreach($planning as $key => $planning_r)
                <td class="text-center"> 
                    <span type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $planning_r->dia }}"><p class="text-info">Fecha</p></span>
                </td>          

                {{-- */$dias[$k] = $planning_r->id;/* --}}
                {{-- */$k++;/* --}}
            @endforeach
        </tr>

        @if($holiday)
                                
            @foreach($empleados as $empleado)
                <tr>
                    <td> 
                        {{ $empleado->full_name }}
                    </td>
                    {{-- */$empleado_id[$n] = $empleado->id;/* --}}
                                            
                    @for($m=0; $m<$k; $m++)

                    <td class="text-center">

                    {{-- */$j=0;/* --}}

                        @for($y=0;$y<count($holiday);$y++)
                            @if($holiday[$y]->empleado_id == $empleado_id[$n] AND $holiday[$y]->dia_id == $dias[$m])

                                {{-- */$j= 1;/* --}}

                                    <span class="fa fa-check"></span>
                                                        
                            @endif
                        @endfor

                        @if($j == 0)

                            {!! Form::checkbox('empleado_id', 'value', false, ['class' => 'Form-control', 'disabled']) !!}

                        @endif
                    </td>
                    @endfor
                </tr>

                {{-- */$n++;/* --}}

            @endforeach

        @endif
    </table>
</div>