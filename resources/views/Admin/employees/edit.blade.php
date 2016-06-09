@extends('layout.layoutAdminTres')

@section('employee_content')

    <!-- ./row -->
<div class="row"><br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"> Datos personales </div>
                <div class="panel-body">
                    <div class="row">
                        {{ Form::model($employee, array('route' => array('admin.employees.update', $employee->id), 'method' => 'PUT')) }}
                            @include('admin.employees.partials.fields')
                    </div> 
                </div>
            <div class="panel-heading"> Datos laborables </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-xs-4">
                            <div class="form-group">                        
                                {!! Form::label('code_em', 'Código', ['class' => 'control-label']) !!}
                                {!! Form::text('code_em', $data_employee->code_em, ['class' => 'form-control', 'placeholder' => 'EM-0004256']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('date_of_admission', 'Fecha de ingreso') !!}
                                {!! Form::date('date_of_admission', $data_employee->date_of_admission, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                {!! Form::label('account_em', 'Nro. Cuenta', ['class' => 'control-label']) !!}
                                {!! Form::text('account_em', $data_employee->account_em, ['class' => 'form-control', 'placeholder' => '2034 4505 73 1000034682']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('contract', 'Contrato') !!}
                                {!! Form::select('contract', array('Determinado' => 'Determinado', 'Indeterminado' => 'Indeterminado'), null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                {!! Form::label('cestaticket', 'Cestaticket', ['class' => 'control-label']) !!}
                                 {!! Form::select('cestaticket', array('Sí' => 'Si', 'No' => 'No'), null, ['class' => 'form-control']) !!}
                            </div> 
                            <div class="form-group">
                                {!! Form::label('duration_em', 'Duración') !!}
                                {!! Form::text('duration_em', $data_employee->duration_em, ['class' => 'form-control', 'placeholder' => '60 Días']) !!}
                            </div>
                        </div>   
                    </div>
                </div>     
                <div class="form-group">
                        <br/>
                <center>
                    <button class="btn btn-primary btn-sm">
                        <span class="fa fa-refresh fa-2x"></span>
                    </button>
                    <button class="btn btn-success btn-sm">
                        <span class="fa fa-save fa-2x"></span>
                    </button>
                </center>
                </div> 
                </div> 
                        {{ Form::close() }}                     
        </div>
    </div>
</div> 

@endsection