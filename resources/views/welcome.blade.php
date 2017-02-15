<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurant sefardí</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/agency.css') }}">
    <link rel="stylesheet" href="{{ asset('jquery/jquery-ui-1.12.1.custom/jquery-ui.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navegacion -->

    @include('navigation')

    <!-- Inicio de sesion y registro -->


    <!-- Header -->

    @include('header')

    <!-- Secciones -->
    @if(!Auth::guest() AND (Auth::user()->roles_id)=='7')
        @include('reservations')
    @endif
        @include('section-services')

        @include('section-platos-del-dia')

        @include('section-about')

        @include('section-team')

        @yield('content')


    <!-- Footer -->

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

    <!-- Vista de portafolio -->

    @include('modals-platos-del-dia')

    @include('login')
    @include('sigin')


    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>
    <script src="{{ asset('js/agency.js') }}"></script>
    <script src="{{ asset('js/funciones.js') }}"></script>
    <script>
        $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                });
    </script>
    <script src="{{ asset('jquery/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker({
        monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Augosto", "Septiembre", "Octubre", "Noviembre", "Diciembere" ],
        dayNamesMin: [ "Do", "Lu", "Ma", "Mie", "Jue", "Vie", "Sab" ],
        maxDate: "+15d",
        minDate: "+1d",
        dateFormat: 'yy-mm-dd', 
      });
    });
    // $( "#datepicker" ).datepicker({
    //
    // });
    </script>

    @yield('autoClick')
</body>
</html>
