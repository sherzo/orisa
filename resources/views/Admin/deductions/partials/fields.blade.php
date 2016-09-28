<div class="panel-body">
    <div class="col-lg-6 col-lg-offset-3">
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('islr', 'ISLR') !!} <strong><span class="text-danger">*</span></strong>
            {!! Form::text('ISLR', null,['class' => 'form-control', 'title' => 'Impuesto Sobre la Renta']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sso', 'SSO') !!} <strong><span class="text-danger">*</span></strong>
            {!! Form::text('SSO', null,['class' => 'form-control', 'title' => 'Seguro Social Obligatorio']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('rpe', 'RPE') !!} <strong><span class="text-danger">*</span></strong>
            {!! Form::text('RPE', null,['class' => 'form-control', 'title' => 'Régimen Prestacional del Empleado']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('rpvh', 'RPVH') !!} <strong><span class="text-danger">*</span></strong>
            {!! Form::text('RPVH', null,['class' => 'form-control', 'title' => 'Régimen Prestacional de Vivienda y Habitad']) !!}
        </div>
    </div>
    <div class="col-lg-6 col-lg-offset-3">
        <div class="form-group">
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>            
</div>
