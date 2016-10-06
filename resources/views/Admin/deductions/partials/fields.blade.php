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
    <div class="col-lg-12">
        <br>
        <div class="form-group tooltip-demo text-center">
            <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
            <!-- <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button> -->
            <br>
        </div>  
    </div>            
</div>
