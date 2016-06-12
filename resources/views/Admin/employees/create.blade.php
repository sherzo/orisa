@extends('layout.layoutAdminDos')

@section('employee_content')

    <!-- ./row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"> Datos personales </div>
                <div class="panel-body">
                    <div class="row">

                        @include('admin.partial.errors')
                      
                        {{ Form::open(['route' => 'admin.employees.store', 'method' => 'POST']) }}
                            @include('admin.employees.partials.fields')
                    </div> 
                </div>
            <div class="panel-heading"> Datos laborables </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">                        
                                {!! Form::label('code_em', 'Código', ['class' => 'control-label']) !!}
                                {!! Form::text('code_em', null, ['class' => 'form-control', 'placeholder' => 'EM-0004256']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('id_position', 'Cargo') !!}
                                {!! Form::select('id_position', $positions, null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('date_of_admission', 'Fecha de ingreso') !!}
                                {!! Form::date('date_of_admission', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                {!! Form::label('account_em', 'Nro. Cuenta', ['class' => 'control-label']) !!}
                                {!! Form::text('account_em', null, ['class' => 'form-control', 'placeholder' => '2034 4505 73 1000034682']) !!}
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
                                {!! Form::text('duration_em', null, ['class' => 'form-control', 'placeholder' => '60']) !!}
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
                        {{ Form::close() }}                     
        </div>
    </div>
</div> 

@endsection
