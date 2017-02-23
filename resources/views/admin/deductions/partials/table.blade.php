<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
    <thead>
        <tr>
            <th style="width: 50px;">#</th>
            <th>SSO</th>
            <th>RPE</th>
            <th>RPVH</th>
            <th style="width: 120px;">Acciones</th>
        </tr>
    </thead>
    <tbody> 
    @foreach($deductions as $deduction)
            <tr>
                <td>
                    {{ $deduction->id }}
                </td>
                <td> 
                    {{ $deduction->SSO }}
                </td>
                <td> 
                    {{ $deduction->RPE }}
                </td>
                <td> 
                    {{ $deduction->RPVH }}
                </td>
                <td class="text-center tooltip-demo">                     
                    <a class="btn btn-default btn-xs" href="{{ route('admin.deducciones.edit', [$deduction->id]) }}" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar"><span class="glyphicon glyphicon-pencil fa-2x"></span></a>
                </td>
            </tr> 
    @endforeach
    </tbody>
</table>                                    

