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
                <h2 class="section-heading">RESTABLECER CONTRASEÑA</h2>
                <h3 class="section-subheading text-muted">Ingresa tu correo asociado para restablecer tu contraseña.</h3>
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
                    <div class="panel-heading">RESTABLECER CONTRASEÑA</div>
                    <div class="panel-body">
                        <div class="col-md-6 col-md-offset-3">
                            <form  role="form" method="POST" action="{{ url('recuperarclave') }}">
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

                                  <button class="btn btn-sm btn-primary btn-lg btn-block">enviar</button><br>        
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