<div class="panel panel-default">
    <div class="panel-heading"> Formulario </div>
    <div class="panel-body">
        <div class="tab-content">
                <div class="col-lg-4">
                    <div class="form-group{{ $errors->has('dni_cedula') ? ' has-error' : '' }}">
                        {!! Form::label('document_em', 'Cédula') !!}
                        {!! Form::text('dni', $dni_cedula, ['class' => 'form-control', 'disabled']) !!}
                        {!! Form::hidden('dni_cedula', $dni_cedula) !!}

                        @if ($errors->has('dni_cedula'))
                            <span class="help-block">
                                <small>{{ $errors->first('dni_cedula') }}</small>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                        {!! Form::label('birthdate_em', 'Fecha de nacimiento') !!}
                        {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}

                        @if ($errors->has('fecha_nacimiento'))
                            <span class="help-block">
                                <small>{{ $errors->first('fecha_nacimiento') }}</small>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        {!! Form::label('addres_em', 'Dirección') !!}
                        {!! Form::textarea('direccion', null, ['class' => 'form-control', 'rows' => '4']) !!}

                        @if ($errors->has('direccion'))
                            <span class="help-block">
                                <small>{{ $errors->first('direccion') }}</small>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                        {!! Form::label('names_em', 'Nombres') !!}
                        {!! Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => 'José Gregorio']) !!}

                        @if ($errors->has('nombres'))
                            <span class="help-block">
                                <small>{{ $errors->first('nombres') }}</small>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">
                        {!! Form::label('civil_status_em', 'Estado civil') !!}
                        {!! Form::select('estado_civil', array('' => 'Seleccione', 'Soltero/a' => 'Soltero/a', 'Comprometido/a' => 'Comprometido/a', 'casado/a' => 'Casado/a', 'Divorciado/a' => 'Divorciado/a', 'Viudo/a' => 'Viudo/a'), null, ['class' => 'form-control']) !!}

                        @if ($errors->has('estado_civil'))
                            <span class="help-block">
                                <small>{{ $errors->first('estado_civil') }}</small>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        {!! Form::label('phone_em', 'Teléfono') !!}
                        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => '+58412 2411757']) !!}

                        @if ($errors->has('telefono'))
                            <span class="help-block">
                                <small>{{ $errors->first('telefono') }}</small>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                        {!! Form::label('surnames_em', 'Apellidos') !!}
                        {!! Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Martínez Pérez']) !!}

                        @if ($errors->has('apellidos'))
                            <span class="help-block">
                                <small>{{ $errors->first('apellidos') }}</small>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                        {!! Form::label('gender_em', 'Género') !!}
                        {!! Form::select('genero', array('' => 'Seleccione', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino'), null, ['class' => 'form-control']) !!}

                        @if ($errors->has('genero'))
                            <span class="help-block">
                                <small>{{ $errors->first('genero') }}</small>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12">
                    <h5 class="page-header"></h5>
                </div>
                <div class="col-lg-4">
                    <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">                        
                        {!! Form::label('code_em', 'Código') !!}
                        {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'EM-0004256']) !!}

                        @if ($errors->has('codigo'))
                            <span class="help-block">
                                <small>{{ $errors->first('codigo') }}</small>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                        {!! Form::label('cargo_id', 'Cargo') !!}
                        {!! Form::select('cargo_id', $cargos, null, ['class' => 'form-control']) !!}

                        @if ($errors->has('cargo'))
                            <span class="help-block">
                                <small>{{ $errors->first('cargo') }}</small>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group{{ $errors->has('fecha_de_admision') ? ' has-error' : '' }}">
                        {!! Form::label('date_of_admission', 'Fecha de ingreso') !!}
                        {!! Form::date('fecha_de_admision', null, ['class' => 'form-control']) !!}

                        @if ($errors->has('fecha_de_admision'))
                            <span class="help-block">
                                <small>{{ $errors->first('fecha_de_admision') }}</small>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('turno') ? ' has-error' : '' }}">
                        {!! Form::label('turno_id', 'Turno') !!}
                        {!! Form::select('turno_id', $turnos, null, ['class' => 'form-control']) !!}

                        @if ($errors->has('turno'))
                            <span class="help-block">
                                <small>{{ $errors->first('turno') }}</small>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group{{ $errors->has('cestaticket') ? ' has-error' : '' }}">
                        {!! Form::label('cestaticket', 'Cestaticket') !!}
                        {!! Form::select('cestaticket', array('' => 'Seleccione', 'Sí' => 'Si', 'No' => 'No'), null, ['class' => 'form-control']) !!}

                        @if ($errors->has('cestaticket'))
                            <span class="help-block">
                                <small>{{ $errors->first('cestaticket') }}</small>
                            </span>
                        @endif
                    </div> 
                    <div class="form-group{{ $errors->has('contrato') ? ' has-error' : '' }}">
                        {!! Form::label('contract_status', 'Contrato') !!}
                        {!! Form::select('contrato', array('' => 'Seleccione', 'Determinado' => 'Determinado', 'Indeterminado' => 'Indeterminado'), null, ['class' => 'form-control']) !!}

                        @if ($errors->has('contrato'))
                            <span class="help-block">
                                <small>{{ $errors->first('contrato') }}</small>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12">
                    <h5 class="page-header"></h5>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('bank', 'Banco') !!}
                        {!! Form::text('banco', null, ['class' => 'form-control', 'placeholder' => 'BBVA Provincial']) !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('type_account', 'Cuenta') !!}
                        {!! Form::select('cuenta_tipo', array('' => 'Seleccione', 'Ahorro' => 'Ahorro', 'Corriente' => 'Corriente'), null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('account_em', 'Nro. Cuenta', ['class' => 'control-label']) !!}
                        {!! Form::text('cuenta_numero', null, ['class' => 'form-control', 'placeholder' => '2034 4505 73 1000034682']) !!}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-offset-10"><br><br>
                        &nbsp;&nbsp;<button type="reset" class="btn btn-danger">Borrar</button>
                        &nbsp;&nbsp;<button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
                <!-- < -->
        </div>  
    </div>
</div> 