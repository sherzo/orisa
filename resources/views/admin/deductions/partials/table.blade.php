<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>ISLR</th>
            <th>SSO</th>
            <th>RPE</th>
            <th>RPVH</th>
        </tr>
    </thead>
    <tbody> 
    @foreach($deductions as $deduction)
            <tr>
                <td class="col-md-1">
                    <a href="{{ route('admin.deducciones.edit', [$deduction->id]) }}">
                        {{ $deduction->id }}
                    </a>
                </td>
                <td class="col-md-3"> 
                    <a href="{{ route('admin.deducciones.edit', [$deduction->id]) }}">
                        {{ $deduction->ISLR }}
                    </a>
                </td>
                <td class="col-md-2"> 
                    <a href="{{ route('admin.deducciones.edit', [$deduction->id]) }}">
                        {{ $deduction->SSO }}
                    </a>
                </td>
                <td class="col-md-2"> 
                    <a href="{{ route('admin.deducciones.edit', [$deduction->id]) }}">
                        {{ $deduction->RPE }}
                    </a>
                </td>
                <td class="col-md-2"> 
                    <a href="{{ route('admin.deducciones.edit', [$deduction->id]) }}">
                        {{ $deduction->RPVH }}
                    </a>
                </td>
            </tr> 
    @endforeach
    </tbody>
</table>                                    

