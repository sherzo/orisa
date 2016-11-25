@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tablero</h1>
    </div>
</div>
<div class="row">
    <a href="">
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
                             <div>Panel de servicios</div>
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
    <a href="">
        @if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='3' || (Auth::user()->roles_id)=='4' || (Auth::user()->roles_id)=='5' || (Auth::user()->roles_id)=='6')
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-calendar fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">1</div>
                            <div>Reservaciones</div>
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
    <a href="">
        @if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='3')
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-cube fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">12</div>
                            <div>Inventario</div>
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
    <a href="{{ url('admin/compra¬') }}">
        @if((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='2' || (Auth::user()->roles_id)=='3')
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-clipboard fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">3</div>
                            <div>Ordenes</div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </a>
    <a href="">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
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
            </div>
        </div>
        @endif
    </a>
</div>

@endsection
