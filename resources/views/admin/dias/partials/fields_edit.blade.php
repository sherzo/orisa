
<div class="col-lg-6">
	<div class="form-group">
		{!! Form::label('estatus', 'Estatus') !!}
        {!! Form::select('estatus', array('Laborable' => 'Laborable', 'No laborable' => 'No laborable'), null, ['class' => 'form-control', 'title' => 'Seleccioné la clase de día que corresponde a esta fecha.']) !!}
	</div>
</div>
<div class="col-lg-6">
	<div class="form-group">
		{!! Form::label('detalles', 'Detalles') !!}
        {!! Form::text('detalle', null, ['placeholder' => 'Decreto Nacional' ,'class' => 'form-control', 'title' => 'Describa algun detalle referente a este día.']) !!}	
	</div>
</div>	
<div class="col-lg-12">
    <br>
    <div class="form-group tooltip-demo text-center">
        <button class="btn btn-default btn-sm" type="submit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Guardar"><span class="glyphicon glyphicon-floppy-saved fa-2x"></span></button>
        <button class="btn btn-default btn-sm" type="reset" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"><span class="glyphicon glyphicon-floppy-remove fa-2x"></span></button>
        <br>
    </div>  
</div>

