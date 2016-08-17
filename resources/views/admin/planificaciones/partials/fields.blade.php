<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"> Planificación</h3>
    </div>
</div>
<div class="col-lg-12">
    @include('flash::message')
</div>
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Formulario
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
                            {!! Form::label('inicio', 'Inicio') !!} <strong><span class="text-danger">*</span></strong>
                            {!! Form::date('fecha_inicio', null,['class' => 'form-control', 'title' => 'Fecha inicio de la planificacíon']) !!}

                            @if($errors->has('fecha_inicio'))
                                    <span class="help-block">
                                        {{ $errors->first('fecha_inicio') }}
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('fecha_final') ? ' has-error' : '' }}">
                            {!! Form::label('final', 'Final') !!} <strong><span class="text-danger">*</span></strong>
                            {!! Form::date('fecha_final', null,['class' => 'form-control', 'title' => 'Fecha final de la planificacíon']) !!}
                            @if($errors->has('fecha_final'))
                                    <span class="help-block">
                                        {{ $errors->first('fecha_final') }}
                                    </span>
                            @endif

                            {!! Form::hidden('estatus', 'Creada') !!}
                        </div>
                        <div class="form-group"><br>
                            <p class="text-muted text-center">Los campos marcados con (<span class="text-danger">*</span>) son obligatorios.</p>
                        </div>
                        <div class="form-group">
                            <center>
                                <button type="reset" class="btn btn-link">
                                    Borrar
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>