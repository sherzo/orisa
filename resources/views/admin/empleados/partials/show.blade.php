<div class="tab-content">
    <div class="tab-pane fade active in" id="home">
        <br>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>CÉDULA</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>FECHA DE NACIMIENTO</th>
                    <th>GÉNERO</th>
                    <th>EDO. CIVIL</th>
                    <th>TELÉFONO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ $employee->dni_cedula }}
                    </td>
                    <td>
                        {{ $employee->nombres }}
                    </td>
                    <td>
                        {{ $employee->apellidos }}
                    </td>
                    <td>
                        {{ $employee->fecha_nacimiento }}
                    </td>
                    <td>
                        {{ $employee->genero }}
                    </td>
                    <td>
                        {{ $employee->estado_civil }}
                    </td>
                    <td>
                        {{ $employee->telefono }}
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th>ADMISIÓN</th>
                    <th>CONTRATO</th>
                    <th>DURACIÓN</th>
                    <th>CESTATICKET</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ $employee->info->codigo }}
                    </td>
                    <td>
                        {{ $employee->info->fecha_de_admision }}
                    </td>
                    <td>
                        {{ $employee->info->contrato }}
                    </td>
                    <td>
                        {{ $employee->info->duracion }}
                    </td>
                    <td>
                        {{ $employee->info->cestaticket }}
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>BANCO</th>
                    <th>TIPO DE CUENTA</th>
                    <th>NÚMERO DE CUENTA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ $employee->info->banco }}
                    </td>
                    <td>
                        {{ $employee->info->cuenta_tipo }}
                    </td>
                    <td>
                        {{ $employee->info->cuenta_numero }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>