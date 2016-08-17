<div class="col-lg-14">
    <div class="panel panel-default">
        <div class="panel-heading">
            {{ $planificacion->fecha_inicio }} - {{ $planificacion->fecha_final }} {!! Form::hidden('id', $planificacion->id) !!}
        </div>
    <div class="panel-body">              
    <table class="table table-bordered table-hover table-striped col-lg-12">
        <thead>
            <tr>
            @for($i=$planificacion->fecha_inicio; $i<=$planificacion->fecha_final ; $i = date('Y-m-d', strtotime($i ."+ 1 days")))
                <th class="text-center">
                {{ $i }}
                {!! Form::hidden('dia[]', $i) !!}
                    <small class="text-info"> <br>
                        (<?php 
                            $fechats = strtotime($i); //a timestamp 
                            switch (date('w', $fechats))
                            { 
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
                </th>
            @endfor
            </tr>
        </thead>
        <tbody>
            <tr>
            @for($i=$planificacion->fecha_inicio; $i<=$planificacion->fecha_final ; $i = date('Y-m-d', strtotime($i ."+ 1 days")))
                <td> {!! Form::select('estatus[]', array('Hábil' => 'Hábil', 'Inhábil' => 'Inhábil'), null, ['class' => 'form-control']) !!} </td>
            @endfor
            </tr>
        </tbody>
    </table>  
    </div> 
    </div>
</div>

<div class="col-lg-12">
    <div class="text-right">
        <button type="submit" class="btn btn-primary"> Continuar </button>  
    </div><br>
</div>


{!! Form::hidden('estatus_planificacion[]', 'Realizada') !!}
