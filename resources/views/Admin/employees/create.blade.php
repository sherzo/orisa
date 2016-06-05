@extends('layout.layoutAdminDos')

@section('reg_emp')

 	<!-- ./row -->
<div class="row"><br>
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Registro de empleado </div>
        		<div class="panel-body">
        			<div class="row">
                    {!! Form::open(['route' => 'admin.employees.store', 'method' => 'POST'])!!}
        				<div class="col-xs-4">
                            <div class="form-group">
                                {!! Form::label('document_em', 'Cédula') !!}
                                {!! Form::text('document_em', null, ['class' => 'form-control', 'placeholder' => 'V-10054256']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('names_em', 'Nombres') !!}
                                {!! Form::text('names_em', null, ['class' => 'form-control', 'placeholder' => 'José Gregorio']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('surnames_em', 'Apellidos', ['class' => 'control-label']) !!}
                                {!! Form::text('surnames_em', null, ['class' => 'form-control', 'placeholder' => 'Martínez Pérez']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('phone_em', 'Telefono', ['class' => 'control-label']) !!}
                                {!! Form::text('phone_em', null, ['class' => 'form-control', 'placeholder' => '412-2411757']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('addres_em', 'Dirección', ['class' => 'control-label']) !!}
                                {!! Form::textarea('addres_em', null, ['class' => 'form-control', 'rows' => '4']) !!}
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                {!! Form::label('gender_em', 'Género') !!}
                                {!! Form::text('genter_em', null, ['class' => 'form-control', 'placeholder' => 'Masculino o Femenino']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('birthdate_em', 'Fecha de nacimiento') !!}
                                {!! Form::date('birthdate_em', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('country_em', 'País') !!}
                                {!! Form::text('country_em', null, ['class' => 'form-control', 'placeholder' => 'Venezuela']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('state_em', 'Estado') !!}
                                {!! Form::text('state_em', null, ['class' => 'form-control', 'placeholder' => 'Aragua']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('city_em', 'Ciudad') !!}
                                {!! Form::text('city_em', null, ['class' => 'form-control', 'placeholder' => 'Maracay']) !!}
                            </div>
                        </div>
                    </div>
                        
                            <center><button type="reset" class="btn btn-default">&nbsp;&nbsp;Borrar&nbsp;&nbsp;</button> 
                            <button type="submit" class="btn btn-success">&nbsp;&nbsp;Guardar&nbsp;&nbsp;</button></center>
                        {!! Form::close() !!}
                    
        			<!-- ./row -->
        			
				</div>
				<!-- /.panel.body -->
		</div>
		<!-- /.panel-default -->
	</div>   
	<!-- /.col-lg-12 -->
</div>
<!-- ./row -->
</div>
<!-- ./page-wrapper -->

@endsection