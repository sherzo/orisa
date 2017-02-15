@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Bienvenido a <em><strong>Orisa</strong></em></h1>
    </div>
</div>
<div class="row">
  <!--
      <a href="{{ url('admin/comandas') }}">
        @if((Auth::user()->roles_id)=='6')
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-th fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">2</div>
                             <div>Nueva Comanda</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        @endif
      </a>

      <a href="{{ url('admin/reservaciones') }}">
        @if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='3' || (Auth::user()->roles_id)=='4' || (Auth::user()->roles_id)=='5' || (Auth::user()->roles_id)=='6')
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-calendar fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $reservaciones->count() }} </div>
                            <div>Reservaciones para hoy</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-left"></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        @endif
      </a>


        @if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='3')
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
              <a href="{{ url('admin/recibos/movimiento') }}">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-money fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $facturas->count() }}</div>
                            <div>Movimiento del día</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
              </a>
            </div>
        </div>
        @endif


        @if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='3')
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
              <a href="{{ url('admin/compra') }}">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-clipboard fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $ordenes->count() }}</div>
                            <div>Ordenes en espera</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
              </a>
            </div>
        </div>


        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
              <a href="">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-exclamation-triangle fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">9</div>
                            <div>Stock minimo</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
              </a>
            </div>
        </div>
        @endif
 -->
 
 <div class="col-md-12 text-center">
   <div class="img-responsive">
     <img src="{{ asset('img/logo/fondo.png') }}">
   </div>
 </div>
</div>
@endsection
