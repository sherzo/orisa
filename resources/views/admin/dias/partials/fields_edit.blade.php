<div class="col-lg-10 col-lg-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">Editar <strong> {{ $dia->id }}</strong></div>
		<div class="panel-body">
			{{ csrf_field() }}
			<div class="col-lg-3 col-lg-offset-1">
				<div class="form-group">
					{!! Form::label('dia', 'Fecha') !!}
                    {!! Form::text('dia', null, ['class' => 'form-control', 'title' => 'Día de la semana', 'disabled' => 'disabled']) !!}	
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					{!! Form::label('estatus', 'Estatus') !!}
                    {!! Form::select('estatus', array('Hábil' => 'Hábil', 'Inhábil' => 'Inhábil'), null, ['class' => 'form-control', 'title' => 'Seleccioné la clase de día que corresponde a esta fecha.']) !!}
				</div>
			</div>
   			<div class="col-lg-4">
				<div class="form-group">
					{!! Form::label('detalles', 'Detalles') !!}
                    {!! Form::text('detalle', null, ['class' => 'form-control', 'title' => 'Describa algun detalle referente a este día.']) !!}	
				</div>
			</div>
		</div>		
		<div class="form-group">
            <center>
				<button type="reset" class="btn btn-primary btn-sm" title="Restablecer">
					<span class="fa fa-refresh fa-2x"></span>
				</button>
				<button class="btn btn-success btn-sm" title="Guardar">
					<span class="fa fa-save fa-2x"></span>
				</button>
            </center>
        </div> 
    </div>
</div>    
