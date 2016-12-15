@if(count($payroll) > 1 OR count($payroll) == 1)

{!! Form::open(['route' => 'admin.payroll.show', 'method' => 'POST']) !!}
	<div class="form-group">
		<div class="input-group">
			<div class="form-group">
				<select class="form-control" name="id">
					@foreach($payroll as $payroll)
						<option value="{{ $payroll->id }}">{{ $payroll->year.'-'.$payroll->mes.'-'.$payroll->quincena }}</option>
					@endforeach
				</select>
			</div>
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default" type="button" id="buscar" title="Buscar productos">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
		</div>
	</div>
{!! Form::close() !!}
@else
<div class="form-group">
	<p class="text-danger text-center">No se encontraron resultados coincidentes</p>
</div>
@endif

@if(!empty($payroll_show))
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>CÉDULA</th>
				<th>NOMBRES</th>
				<th>CARGO</th>
				<th>ASIGNACIONES EXTRA</th>
				<th>DEDUCCIONES EXTRA</th>
				<th>LABORADOS</th>
				<th>NO LABORADOS</th>
				<th>TOTAL</th>
			</tr>
		</thead>
		<tbody>
			@foreach($payroll_show as $payroll_show)
				<tr>
					<td>
						{{ $payroll_show->cedula }}
					</td>
					<td>
						{{ $payroll_show->nombre_completo }}
					</td>
					<td>
						{{ $payroll_show->cargo }}
					</td>
					<td>
						{{ $payroll_show->asignaciones_ext }}
					</td>
					<td>
						{{ $payroll_show->deducciones_ext }}
					</td>
					<td>
						{{ $payroll_show->laborados }}
					</td>
					<td>
						{{ $payroll_show->no_laborados }}
					</td>
					<td>
						{{ $payroll_show->salario_total }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="col-lg-12 text-center">
		<a class="btn btn-default btn-xs" href="{{ route('admin.recibo.nomina', $payroll_list->id) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Impirmir"><span class="glyphicon glyphicon-print fa-2x"></span></a>
	</div>
@endif
