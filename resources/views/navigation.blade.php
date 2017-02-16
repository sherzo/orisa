    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Restaurant Sefardí</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    @if(!Sentinel::guest() AND (Sentinel::user()->roles()->first()->slug) == '7')
                    <li>
                        <a class="page-scroll" href="#reservations">Reservaciones</a>
                    </li>
                    @endif
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Menú</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Nosotros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Equipo</a>
                    </li>
                    @if(Auth::guest())
                    <li>
                        <a class="page-scroll login" href="{{ url('iniciarsesion') }}">Iniciar sesión</a>
                    </li>

                    @endif
                    @if(!Auth::guest())
                    @if(!Auth::user()->roles_id) == '7')
                    <li>
                        <a class="page-scroll" href="{{ url('/admin') }}" title="Entrar">
                        <span class="fa fa-sign-out"></span> {{ Auth::user()->name }}

                        </a>

                    </li>
                    @endif

                    <li>
                        <a class="page-scroll" href="{{ url('/admin/salir') }}" title="Entrar">
                        <span class="fa fa-power-off"></span> Salir

                        </a>

                    </li>

                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- End Navigation -->
