@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Esta sera la pagina de TODO PUBLICO de la aplicación sin haber iniciado sesion, donde se mostrara:<br><br>
                    <ul>
                        <li>Inicio</li>
                        <li>Contacto</li>
                        <li>Menu del dia
                                <ul>
                                    <li>Platos</li>
                                    <li>Tragos</li>
                                </ul>
                        </li>
                        <li>Iniciar Sesión</li>
                        <li>Registrarse</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
