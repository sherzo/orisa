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
                    <li><a href="{{ url('admin/usuarios') }}/{{ Sentinel::getUser()->id }}"></i>Perfil</a></li>
                    <li><a href="#"></i>Opciones</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/admin/salir') }}">Salir</a></li>
                </ul>
            </li>
        </ul>
    {!! Form::open(['route' => 'admin.comandas.store', 'method' => 'POST']) !!}
        @if(isset($comanda))
        <input type="hidden" name="comanda_id" value="{{$comanda->id}}">
        @endif
        <input type="hidden" value="{{asset('img')}}" id="direccion">
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse collapse in" aria-expanded="true">
                <ul class="nav" id="side-menu">
                    <li><a href="{{ url('admin') }}"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                </ul>
            </div>
            <table class="table table-hover table-condensed">
                <thead>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th></th>
                </thead>
                <tbody id="productos"></tbody>
                <tfoot>
                    <th><button class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="right" title="En espera"><span class="fa fa-bell
                       fa-2x
                      "></span></button></th>
                    <th><strong>Total: </strong></th>
                    <th id="total" colspan="2"></th>
                </tfoot>
            </table>
        </div>
    </nav>
</div>
<div id="page-wrapper">
  @include('flash::message')

    @yield('contenido')
</div>
{!! Form::close() !!}
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
        });;
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
    </script>
</body>
</html>
