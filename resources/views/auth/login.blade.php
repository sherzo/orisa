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
                <h2 class="section-heading">INICIAR SESIÓN</h2>
                <h3 class="section-subheading text-muted">Crea una cuenta o inicia sesión en <strong>Restaurant Sefardí</strong>. Reserva tu mesa, comparte con familiares y amigos.</h3>
            </div>
            <div class="col-md-8 col-md-offset-2">
            
                @include('flash::message')

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong> Oops! </strong> Hay algunos problemas con su entrada.<br><br>
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
                    <div class="panel-heading">INICIAR SESIÓN</div>
                    <div class="panel-body">
                        <div class="col-md-6 col-md-offset-3">
                            <form  role="form" method="POST" action="{{ url('iniciarsesion') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Correo Electrónico</label>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Ejm: ejemplo@hotmail.com" value="{{ old('email') }}" title="Aquí debe introducir su correo asociado a su cuenta del restaurant" required="required">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <small>{{ $errors->first('email') }}</small>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>Contraseña</label>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Ejm: 123456" title="Aquí debe introducir su contraseña asociado a su cuenta del restaurant" required="required">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <small>{{ $errors->first('password') }}</small>
                                        </span>
                                    @endif
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Recuérdame
                                    </label>
                                </div>
                                
                                <button class="btn btn-sm btn-primary btn-lg btn-block">Entrar</button><br>
                                <p class="text-center">¿No tiene una cuenta? <a href="{{ url('registrarme') }}"> Registrarme.</a> </p>
                                <p class="text-center"><a href="{{ url('recuperarclave') }}">He olvidado mi contraseña </a></p>
                                                            
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

    @include('scripts')
    

</body>

</html>