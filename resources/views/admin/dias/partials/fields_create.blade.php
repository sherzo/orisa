
{{-- */$n=0;/* --}}
{{-- */$k=7;/* --}}
{{-- */$b=0;/* --}}


    @for($j=$planificacion->fecha_inicio; $j<=$planificacion->fecha_final ; $j = date('Y-m-d', strtotime($j ."+ 1 days")))
        {{-- */$a[] = $j;/* --}}
        {{-- */$b++;/* --}}
    @endfor

<div class="panel-body">              
    <table class="table table-bordered table-hover table-responsive table-striped col-lg-12">
    <?php
        $cuantos=$b;
        $impresos=0;

    ?>
    <?php
        do{
            
            mostrar($k,$n,$a,$planificacion);

            $impresos+=7;
            $quedan= $cuantos - $impresos;
            //echo $impresos.":".$quedan;
            if($quedan>7){
               
                $n=$n+7;
                $k=$k+7;

            }else{
                 
                $n=$k;
                $k=$k+$quedan;
            }

            

        }while ($quedan >= 0);


    ?>

    </table>  
    <div class="col-lg-12">
        <br>
        <div class="form-group tooltip-demo text-center">
            <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
           <!--  <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button> -->
            <br>
        </div>  
    </div>
</div> 
    
    <?php

        function mostrar($k,$n,$a,$planificacion)
        {

        ?>
        <thead>
            <tr>
                @for($i=$n;$i<$k;$i++)
                    <td class="text-center"> 
                        {{ $a[$i] }} 
                        {!! Form::hidden('estatus_planificacion', 'Realizada') !!} 
                        {!! Form::hidden('dia[]', $a[$i]) !!}  
                        {!! Form::hidden('id', $planificacion->id) !!}

                        <small class="text-info"><br>
                        (<?php
                            $fechats = strtotime($a[$i]);
                            switch (date('w', $fechats)){
                                case 0: echo "Domingo"; break;
                                case 1: echo "Lunes"; break;
                                case 2: echo "Martes"; break;
                                case 3: echo "Miércoles"; break; 
                                case 4: echo "Jueves"; break;
                                case 5: echo "Viernes"; break; 
                                case 6: echo "Sábado"; break;
                            }
                        ?>)
                        </small> 
                    </td>
                @endfor
            </tr>
        </thead>

        <tbody>
            <tr>
                @for($i=$n;$i<$k;$i++)
                    <td>  
                        {!! Form::select('estatus[]', array('Laborable' => 'Laborable', 'No laborable' => 'No laborable'), null, ['class' => 'form-control']) !!} 
                    </td>
                @endfor
            </tr>
        </tbody>

<?php

        }
?>