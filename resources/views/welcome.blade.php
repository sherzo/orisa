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
    @include('scripts')

</body>
</html>
