<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('htmlheader')

</head>

<body id="page-top" class="index">

    @include('navigationLogin')


<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">CREAR UNA CUENTA</h2>
                <h3 class="section-subheading text-muted">Registrate para reservar tu mesa, compartir con familiares y amigos.</h3>
            </div>
            <div class="col-md-8 col-md-offset-2">
            
                @include('flash::message')

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong> Oops! </strong> Hay algunos problemas con su registro.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">REGISTRARME</div>
                    <div class="panel-body">
                        <div class="col-md-8 col-md-offset-2">
                            <form role="form" method="POST" action="{{ url('registrarme') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label>Nombre (s)</label>
                                    <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="Ejm: Jesús Matute" title="Aquí debe introducir su nombre debe contener solo caracteres." required="required">
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Correo Electrónico</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ejm: ejemplo@hotmail.com" title="Aquí debe introducir su correo electrónico asociado al restaurant & sportbar sefardí">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Contraseña</label>
                                    <input id="password" type="password" class="form-control" name="password" title="Aquí debe introducir su contraseña, debe tener 6 caracteres como mínimo, distingue mayúsculas de minúsculas." required="required">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm">Vuelve a escribir la contraseña</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" title="Aquí debe introducir la confirmacion de su contraseña." required="required">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <button class="btn btn-sm btn-primary btn-lg btn-block">Crear cuenta</button><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">&copy; 2016 Todo los derechos reservados  Restaurant & SportBar Sefardí</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Política de Privacidad</a>
                        </li>
                        <li><a href="#">Términos y condiciones de uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
