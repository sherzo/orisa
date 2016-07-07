<div class="panel panel-default">
    <div class="panel-heading">  </div>
        <div class="panel-body">

<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active">
        <a href="#personales" aria-controls="asistencia" role="tab" data-toggle="tab"> Horario </a>
    </li>
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="asistencia">
        <br/>
            <h4></h4>
        <br/>
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('empleado', 'Empleado') !!}
                {!! Form::select('id', $employees, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('hora_en', 'Hora')!!}
                {!! Form::time('hora', $date->format('h:i'), ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                {!! Form::label('fecha', 'Fecha')!!}
                {!! Form::date('hora', $date, ['class' => 'form-control', 'disabled']) !!}
                {{ Form::hidden('entrada', '$date->format(d-m-y)') }}
            </div>
            <div class="form-group">
                {!! Form::label('hora_entrada', 'Entrada')!!}
                {!! Form::text('h_entrada', $date->format('h:i A'), ['class' => 'form-control', 'disabled']) !!}
                {{ Form::hidden('h_entrada', '$date->format(h:i:s)') }}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <br/><br/><br>
            </div>
            <div class="form-group">
                {!! Form::label('hora_salida', 'Salida')!!}
                {!! Form::text('hora_salida', $date->addHour(8)->format('h:i A'), ['class' => 'form-control', 'disabled']) !!}
                {{ Form::hidden('h_salida', '$date->addHour(8)->format(h:i:s)') }}
            </div>
        </div>
        <div>
            <div class="col-xs-4">
                
            </div>
        </div>
    </div>
</div>
        </div>
</div>
