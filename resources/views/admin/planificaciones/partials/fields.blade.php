<div class="col-lg-6">
    <div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
        {!! Form::label('inicio', 'Inicio') !!} <small class="text-danger">*</small>
        {!! Form::date('fecha_inicio', null,['class' => 'form-control', 'title' => 'Fecha inicio de la planificacíon', 'id' => 'datepicker']) !!}

        @if($errors->has('fecha_inicio'))
            <span class="help-block">
                <em>{{ $errors->first('fecha_inicio') }}</em>
            </span>
        @endif
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group{{ $errors->has('fecha_final') ? ' has-error' : '' }}">
        {!! Form::label('final', 'Final') !!} <small class="text-danger">*</small>
        {!! Form::date('fecha_final', null,['class' => 'form-control', 'title' => 'Fecha final de la planificacíon']) !!}
        
        @if($errors->has('fecha_final'))
            <span class="help-block">
                <em>{{ $errors->first('fecha_final') }}</em>
            </span>
        @endif
    </div>
</div>
<div class="col-lg-12">
    <hr>
    <div class="form-group tooltip-demo text-center">
        <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
        <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
        <br>
    </div>  
</div>            
