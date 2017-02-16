<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurant sefardí</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/metisMenu/dist/metisMenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/sb-admin-2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/morrisjs/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('chosen/bootstrap-chosen.css') }}">
</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img alt="Brand" src="{{ asset('img/logo/isologo2.png') }}" width="110" height="35"><span>Restaurant & Spor Bar</span></a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            
            <li class="dropdown">
                <a class="dropdown-toggle color" data-toggle="dropdown" href="#">
                  {{ Sentinel::getUser()->roles()->first()->name }}:
                    <i class="fa fa-user fa-fw"></i> {{ Sentinel::getUser()->first_name }}  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{ url('admin/usuarios') }}/{{Sentinel::getUser()->id}}" class="text-muted">Perfil</a></li>
                    <li class="divider"></li>
                    <li>
                        {!! Form::open(['action' => 'AuthenticateController@logout', 'method' => 'POST', 'id' => 'logout']) !!}
                            {{ csrf_field() }} <a href="#" onclick="document.getElementById('logout').submit()" style="text-decoration: none;" class="text-muted samll">Salir</a>
                        {!! Form::close() !!}
                    </li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse collapse in" aria-expanded="true">
                <ul class="nav" id="side-menu">
                    <!-- 1 = ROOT | 2 = ADMINISTRADOR | 3 = ENCARGADO
                         4 = COCINERO | 5 = CAJERO | 6 = MESONERO |
                         7 = CLIENTE
                    -->

                    <li><a href="{{ url('admin') }}"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                    <!-- COMPRA -->
                    @if((Sentinel::getUser()->roles()->first()->slug)=='1' || (Sentinel::getUser()->roles()->first()->slug)=='3')
                      <li><a href="#" ><i class="fa fa-fw fa-shopping-cart"></i> Compra<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li><a href="{{ url('admin/compra') }}">Orden de Compra</a></li>
                              <li><a href="{{ url('admin/proveedores')}}">Proveedores</a></li>
                              <li><a href="#"> Inventario<span class="fa arrow"></span></a>
                                  <ul class="nav nav-third-level">
                                      <li><a href="{{ url('admin/ingredientes') }}">Ingredientes</a></li>
                                      <li><a href="{{ url('admin/licores') }}">Licores</a></li>
                                      <li><a href="{{ url('admin/bebidas') }}">Bebidas</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                    @endif
                    <!-- FIN COMPRA -->

                    <!-- SERVICIOS -->
                    @if((Sentinel::getUser()->roles()->first()->slug)!='2')
                    <li><a href="#"><i class="fa fa-fw fa-cutlery"></i> Servicios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#"> Menú<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{ url('admin/platos') }}">Platos</a></li>
                                    <li><a href="{{ url('admin/jugos') }}">Jugos</a></li>
                                    <li><a href="{{ url('admin/sauces') }}">Salsas</a></li>
                                    <li><a href="{{ url('admin/tragos') }}">Tragos</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Comandas<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  @if((Sentinel::getUser()->roles()->first()->slug)=='1' || (Sentinel::getUser()->roles()->first()->slug)=='2' || (Sentinel::getUser()->roles()->first()->slug)=='4' || (Sentinel::getUser()->roles()->first()->slug)=='6')
                                    <li><a href="{{ url('admin/comandas') }}">Nueva</a></li>
                                  @endif
                                    <li><a href="{{ url('admin/comandas/en-espera') }}">En espera</a></li>
                                    <li><a href="{{ url('admin/comandas/procesadas')}}">Procesadas</a></li>
                                </ul>
                            </li>
                            @if((Sentinel::getUser()->roles()->first()->slug)=='1' || (Sentinel::getUser()->roles()->first()->slug)=='2' || (Sentinel::getUser()->roles()->first()->slug)=='4' || (Sentinel::getUser()->roles()->first()->slug)=='3')
                            <li><a href="{{ url('admin/clientes') }}">Clientes</a></li>
                            @endif
                            <li><a href="{{ url('admin/reservaciones') }}">Reservaciones</a></li>
                            <li><a href="{{ url('admin/platos-del-dia') }}">Plato del día</a></li>
                        </ul>
                    </li>
                    @endif
                    <!-- FIN SERVICIOS -->

                    <!-- EMPLEADOS -->
                    @if((Sentinel::getUser()->roles()->first()->slug)=='1' || (Sentinel::getUser()->roles()->first()->slug)=='3' )
                    <li><a href="#"  ><i class="fa fa-fw fa-male"></i> Empleados<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ url('admin/empleados') }}"> Personal </a></li>
                            <li><a href="{{ url('admin/cargos') }}"> Cargo </a></li>
                            <li><a href="{{ url ('admin/asistencias') }}"> Asistencia </a></li>
                            <li><a href="#"> Planificaciones<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{ url('admin/planificaciones') }}"> Fechas</a></li>
                                    <li><a href="{{ url('admin/planificaciones/administrar/dias') }}"> Días</a></li>
                                    <li><a href="{{ url('admin/planificaciones/administrar/dias/turnos') }}"> Planificación</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Prenóminas<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{ url('admin/nomina') }}"> Cálculo</a></li>
                                    <li><a href="{{ url('admin/deducciones') }}"> Deducción </a></li>
                                    <li><a href="{{ url('admin/asignaciones') }}"> Asignación </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <!-- FIN EMPLEADOS -->

                    <!--  MATENIMIENTO -->
                    @if((Sentinel::getUser()->roles()->first()->slug)=='1' || (Sentinel::getUser()->roles()->first()->slug)=='2')
                    <li><a href="#"><i class="fa fa-fw fa-wrench"></i> Mantenimiento<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ url('admin/usuarios') }}">Usuarios</a></li>
                            <li><a href="{{ url('admin/backup') }}">Respaldo BD</a></li>
                            <li><a href="#">Restauranción BD</a></li>
                            <li><a href="{{ url('admin/bitacora') }}">Bítacora</a></li>
                        </ul>
                    </li>
                    @endif
                    <!-- FIN MATENIMIENTO -->
                </ul>
            </div>
         </div>
    </nav>
  </div>
    <!-- <footer class="footer">
      <div class="container">
        <p class="text-muted">Diseñado y programado por <a> Saul Florez</a>, <a>Jesus Matute</a> y <a>Oliver Linares </a> </p>
      </div>
    </footer>
-->
    <div id="page-wrapper" style="min-height: 365px;">
        <div class="row">
            @yield('contenido')
        </div>
    </div>

    <script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bower_components/metisMenu/dist/metisMenu.js') }}"></script>
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('jquery/funciones.js') }}"></script>
    <script src="{{ asset('js/comandas.js') }}"></script>
    <script src="{{ asset('chosen/chosen.jquery.min.js') }}"></script>

        @yield('js')

    <script>
        $('div.alert').not('.alert-important').delay(5000).fadeOut(350);
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script type="text/javascript">
    function desbloquear()
    {
        hora_entrada = document.form1['hora_entrada[]'];
        hora_salida = document.form1['hora_salida[]'];


        for (i = 0, checks = document.form1['empleados[]']; i < checks.length; i++)
        {
            if(checks[i].checked)
            {

                hora_entrada[i].disabled = false;
                hora_salida[i].disabled = false;
            }else{
                hora_entrada[i].disabled = true;
                hora_salida[i].disabled = true;
            }
        }
    }
    </script>
    <script>
        $("#select_all").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>
    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()


    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
    })

    function readURL(input) {
      if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
      $('#img_prev')
      .attr('src', e.target.result);   //  ACA ESPECIFICAN QUE TAMANO DE ALTO QUIEREN
      };
      reader.readAsDataURL(input.files[0]);
      }
      }
    </script>
</body>
</html>
