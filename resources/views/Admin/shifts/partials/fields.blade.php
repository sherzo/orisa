<div class="panel panel-default">
    <div class="panel-heading"> Planificación</div>
        <div class="panel-body">

<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#turno" aria-controls="personales" role="tab" data-toggle="tab">Descripción</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="turno">
    <br/><h4></h4><br/>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('turno', 'Turno') !!}
        {!! Form::text('turno', null, ['class' => 'form-control', 'placeholder' => 'Mañana']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('entrada', 'Entrada') !!}
        {!! Form::time('hora_entrada', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('semana_inicio', 'Inicio') !!}
        {!! Form::date('fecha_inicio', null, ['class' => 'form-control', 'id' => 'datepicker']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('turno', 'Salida') !!}
        {!! Form::time('hora_salida', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('semana_fin', 'Fin', ['class' => 'control-label']) !!}
        {!! Form::date('fecha_culminacion', null, ['class' => 'form-control']) !!}
    </div>
</div>          
    </div>
        </div>  
    </div>
</div>
