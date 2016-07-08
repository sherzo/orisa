<div class="panel panel-default">
    <div class="panel-heading"> Datos </div>
        <div class="panel-body">

<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#cargo" aria-controls="personales" role="tab" data-toggle="tab">Descripción</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="cargo">
    <br/><h4></h4><br/>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('Codigo', 'Código') !!}
        {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'M-001']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('name_position', 'Cargo') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Mesonero']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('salary_month', 'Salario base', ['class' => 'control-label']) !!}
        {!! Form::text('salario', null, ['class' => 'form-control', 'placeholder' => '15.051']) !!}
    </div>
</div>          
    </div>
        </div>  
    </div>
</div>