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
            <a class="navbar-brand" href="{{ url('admin') }}"><img alt="Brand" src="{{ asset('img/logo/Orisa6.png') }}" width="28" height="27"></a>
            <a href="{{ url('admin') }}" class="navbar-brand">Orisa</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle color" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle color" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{ url('admin/usuarios') }}/{{Auth::user()->id}}"></i>Perfil</a></li>
                    <li><a href="#"></i>Opciones</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/admin/salir') }}">Salir</a></li>
                </ul>
            </li>
        </ul>
        
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse collapse in" aria-expanded="true">
                <ul class="nav" id="side-menu">
                    <li><a href="{{ url('admin') }}"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cutlery"></i> Servicios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
@if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='4' || (Auth::user()->roles_id)=='5')                  
                            <li><a href="{{ url('admin/clientes') }}">Clientes</a></li>
@endif                  
                            <li><a href="{{ url('admin/platos') }}">Platos</a></li>
                            <li><a href="#">Jugos</a></li>
                            <li><a href="{{ url('admin/sauces') }}">Salsas</a></li>


                            <li><a href="{{ url('admin/bebidas') }}">Bebidas</a></li>
                            <li><a href="platos.html">Comandas</a></li>
@if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='4' || (Auth::user()->roles_id)=='5')    
                            <li><a href="platos.html">Recibos</a></li>
@endif
                            <li><a href="{{ url('admin/reservaciones') }}">Reservaciones</a></li>
                        </ul>
                    </li>
@if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='3' )
                    <li><a href="#"  ><i class="fa fa-fw fa-male"></i> Empleados<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ url ('admin/asistencias') }}"> Asistencias </a></li>
                            <li><a href="{{ url('admin/cargos') }}"> Cargos </a></li>
                            <li><a href="#"> Nómina<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{ url('admin/nomina') }}}">Cálculo</a></li>
                                    <li><a href="{{ url('admin/deducciones') }}"> Deducciones </a></li>
                                    <li><a href="{{ url('admin/empleados') }}"> Personal </a></li>
                                </ul>
                            <li><a href="#"> Prenómina<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{ url('admin/planificaciones') }}"> Fechas</a></li>
                                    <li><a href="{{ url('admin/planificaciones/administrar/dias') }}"> Días</a></li>
                                    <li><a href="{{ url('admin/planificaciones/administrar/dias/turnos') }}"> Planificación</a></li>
                                </ul>   
                        </ul>
                    </li>
@endif

@if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='3' )
                    <li><a href="#" ><i class="fa fa-fw fa-shopping-cart"></i> Compra<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ url('admin/compra') }}">Orden de Compra</a></li>
                            <li><a href="#">Inventario</a></li>
                            <li><a href="{{ url('admin/proveedores')}}">Proveedores</a></li>  
                            <li><a href="{{ url('admin/ingredientes') }}">Ingredientes</a></li>                     
                            <li><a href="{{ url('admin/licores') }}">Licores</a></li>
                        </ul>
                    </li>
@endif

@if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2')
                    <li><a href="#"><i class="fa fa-fw fa-wrench"></i> Mantenimiento<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ url('admin/usuarios') }}">Usuarios</a></li>
                            <li><a href="#">Respaldo BD</a></li>
                            <li><a href="#">Restauranción BD</a></li>
                            <li><a href="#">Bítacora</a></li>
                        </ul>
                    </li>
@endif
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
    <div id="page-wrapper">
        @yield('contenido')
    </div>

    <script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bower_components/metisMenu/dist/metisMenu.js') }}"></script>
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('jquery/funciones.js') }}"></script>
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
        });;
    </script>
</body>
</html>