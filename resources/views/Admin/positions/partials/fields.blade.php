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
        {!! Form::label('code_position', 'Código') !!}
        {!! Form::text('code_position', null, ['class' => 'form-control', 'placeholder' => 'M-001']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('name_position', 'Cargo') !!}
        {!! Form::text('name_position', null, ['class' => 'form-control', 'placeholder' => 'Mesonero']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('salary_month', 'Remuneración', ['class' => 'control-label']) !!}
        {!! Form::text('salary_month', null, ['class' => 'form-control', 'placeholder' => '2000']) !!}
    </div>
</div>          
    </div>
        </div>  
    </div>
</div>