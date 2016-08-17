<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iniciar sesión</title>

    
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/metisMenu/dist/metisMenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/sb-admin-2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/font-awesome/css/font-awesome.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="container"><br><br><br>
    <div class="col-lg-6 col-lg-offset-3"><br><br><br>
        <ol class="breadcrumb">
            <li class="active">Iniciar sesión</li>
        </ol>
    </div>                  
    <div class="col-lg-4 col-lg-offset-4"><br>
        <form  role="form" method="POST" action="{{ url('/iniciar-sesion') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}"><br>
                <input id="user" type="text" class="form-control" name="user" placeholder="Correo electrónico" value="{{ old('user') }}">
                @if ($errors->has('user'))
                    <span class="help-block">
                        <samll>{{ $errors->first('user') }}</samll>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
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
            <p class="text-center">¿No tiene una cuenta? <a href="{{ url('/registrar') }}"> Cree una.</a> </p>
            <p class="text-center"><a href="{{ url('/password/reset') }}">He olvidado mi contraseña </a></p>
            <p class="text-center"><small> © 2016 - Copyright UPTA-FBF </small></p>
                                
        </form>
    </div>
</div>
    
    <script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bower_components/metisMenu/dist/metisMenu.js') }}"></script>
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
