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
    <div class="tab-pane fade" id="profile">
        <br>
           
    </div>
    <div class="tab-pane fade" id="messages">
        <h4>Messages Tab</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="tab-pane fade" id="settings">
        <h4>Settings Tab</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>