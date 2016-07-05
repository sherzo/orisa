<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Orisa</title>

    <!-- Bootstrap Core CSS -->
    
    <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom styles for this template -->
   

    <!-- MetisMenu CSS -->
    <link href="../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet" type="text/css">

    <!-- Timeline CSS -->
    <link href="../../dist/css/timeline.css" rel="stylesheet">
    
    <!-- Footer CSS -->
    <link href="../../dist/css/footer.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="../../bower_components/morrisjs/morris.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

    </style>
</head>
<body>

    <div id="wrapper">

       <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img alt="Brand" src="../../img/logo/Orisa6.png" width="28" height="27"></a>
                <a href="" class="navbar-brand">Orisa</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
          
                <!-- /.dropdown -->
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
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle color" data-toggle="dropdown" href="#">
                     {{ Auth::user()->name }} <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Opciones</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->

                 <li>
                    <a href="{{ url('/logout') }}">
                        <i class="glyphicon glyphicon-off"></i> 
                    </a>
                    </li>
            </ul>
            <!-- /.navbar-top-links -->

                  <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                     
                        <li>
                            <a href="{{ url('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Tablero</a>
                        </li>
                       

                        <li>
                            <a href="#"><i class="fa fa-delicious fa-fw"></i> Servicios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
             @if((Auth::user()->type)=='1' || (Auth::user()->type)=='2' || (Auth::user()->type)=='2' || (Auth::user()->type)=='4' || (Auth::user()->type)=='5')                  
                                <li>
                                    <a href="{{ url('clientes') }}">
                                    <i class="fa fa-users fa-fw"></i> Clientes</a>
                                </li>
            @endif                  
                                <li>
                                    <a href="{{ url('admin/platos') }}">
                                    <i class="fa fa-cutlery fa-fw"></i>
                                    Platos</a>
                                </li>
                                <li>
                                    <a href="platos.html">
                                    <i class="fa fa-glass fa-fw"></i> Tragos</a>
                                </li>
                                <li>
                                    <a href="platos.html">
                                    <i class="fa fa-file-text-o fa-fw"></i> Comandas</a>
                                </li>
            @if((Auth::user()->type)=='1' || (Auth::user()->type)=='2' || (Auth::user()->type)=='2' || (Auth::user()->type)=='4' || (Auth::user()->type)=='5')
                                <li>
                                    <a href="platos.html">
                                    <i class="glyphicon glyphicon-barcode"></i> Comprobante de comandas</a>
                                </li>
            @endif
                                <li>
                                    <a href="{{ url('clientes') }}">
                                    <i class="fa fa-clock-o fa-fw"></i> Reservaciones</a>
                                </li>
                               
                                </ul>
                                </li>
            @if((Auth::user()->type)=='1' || (Auth::user()->type)=='2' || (Auth::user()->type)=='3' )
                         <li>
                            <a href="#"  ><i class="fa fa-male fa-fw "></i> Personal <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                             <li>
                                    <a href="{{ url('admin/employees') }}">
                                    <i class="glyphicon glyphicon-briefcase"></i> Empleados</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/cargos') }}">
                                    <i class="glyphicon glyphicon-briefcase"></i> Cargos </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa  fa-calendar fa-fw"></i> Asistencias</a>
                                </li>
                            </ul>
                            </li>
  @endif

  @if((Auth::user()->type)=='1' || (Auth::user()->type)=='2' || (Auth::user()->type)=='3' )
                          <li>

                            <a href="" ><i class="
                            glyphicon glyphicon-shopping-cart"></i> Compra<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/compra') }}">
                                    <i class="fa fa-clipboard fa-fw"></i> Orden de Compra</a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-cube fa-fw"></i> Inventario</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/proveedores')}}">
                                    <i class="fa fa-truck fa-fw"></i> Proveedores</a>
                                </li>  
                                 <li>
                                    <a href="{{ url('admin/ingredientes') }}">
                                    <i class="glyphicon glyphicon-apple"></i> Ingredientes</a>
                                </li>                     
                                <li>
                                    <a href="{{ url('admin/licores') }}">
                                    <i class="fa  fa-beer fa-fw"></i> Licores</a>
                                </li>
                            </ul>
                            </li>
@endif
                @if((Auth::user()->type)=='1' || (Auth::user()->type)=='2')
                              <li>
                            <a href="#">
                            <i class="glyphicon glyphicon-wrench"></i> Mantenimiento
                            <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="{{ url('admin/usuarios') }}">
                                    <i class="glyphicon glyphicon-user">
                            </i>
                                    Usuarios</a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-database fa-fw"></i>
                                    Respaldo BD</a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="glyphicon glyphicon-refresh"></i> Restauranción BD</a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-history fa-fw"></i> Bítacora</a>
                                </li>
                                </ul>
                                </li>
                @endif


                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->


            </div>

            <!-- /.navbar-static-side -->
        </nav>
               
  </div>
    <!-- <footer class="footer">
      <div class="container">
        <p class="text-muted">Diseñado y programado por <a> Saul Florez</a>, <a>Jesus Matute</a> y <a>Oliver Linares </a> </p>
      </div>
    </footer>
-->

<div id="page-wrapper"><br>


@yield('contenido')
@yield('employee_content')
@yield('positions_content')

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <!-- JAVASCRIPT PROPIOS --> 

    <script src="../../dist/js/agregar_ingrediente.js"></script>
    
    <!-- FIN JAVASCRIPT P¨ROPIOS -->

     
    <!-- Bootstrap Core JavaScript -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>
    <!-- DataTables JavaScript -->
    <script src="../../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>
</html>