<div class="panel panel-default">
    <div class="panel-heading"> ID </div>
        <div class="panel-body">

<ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#cargo" aria-controls="personales" role="tab" data-toggle="tab">Fecha</a></li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="cargo">
    <br/><h4></h4><br/>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('inicio', 'Comienza') !!}
        {!! Form::date('fecha_inicio', null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-xs-4">
    <div class="form-group">
        {!! Form::label('fin', 'Termina') !!}
        {!! Form::date('fecha_culminacion', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="col-xs-4"></div>    
<div class="col-xs-12">
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th> Empleados   </th>
            <th> DNI </th>
            <th> Turno </th>
        </tr>
    </thead>
@foreach($employees as $employee)
{!! Form::hidden('employee_id[]', $employee->id) !!}
    <tbody>
        <tr>
            <td> {{ $employee->nombres_em.' '.$employee->apellidos_em }} </td>
            <td align="center"> {{ $employee->dni }} </td>
            <td> {!! Form::select('shifts_id[]', $shifts, null,['class' => 'form-control']) !!} </td>
        </tr>      
    </tbody>
@endforeach
</table>
    
</div>
    </div>
        </div>  
    </div>
</div>