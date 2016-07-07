@extends('layout.layout')

@section('contenido')

            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header">Tablero</h1>                    
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <a href="#">
            @if((Auth::user()->type)=='1' || (Auth::user()->type)=='2' || (Auth::user()->type)=='3' || (Auth::user()->type)=='5')
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">18</div>
                                    <div>Movimiento del dia</div>
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
                @endif

                @if((Auth::user()->type)=='6')
                <a href="">
                <div class="col-lg-6 col-md-6">
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
                </a>
                @endif
                
                @if((Auth::user()->type)=='1' || (Auth::user()->type)=='2' || (Auth::user()->type)=='3' || (Auth::user()->type)=='4' || (Auth::user()->type)=='5' || (Auth::user()->type)=='6')
                <a href="">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-clock-o fa-5x"></i>
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
                </a>
                @endif

                @if((Auth::user()->type)=='1' || (Auth::user()->type)=='2' || (Auth::user()->type)=='3')
                <a href="">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list-alt fa-5x"></i>
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
                        </a>
                    </div>
                </div>
                </a>
                @endif

                 @if((Auth::user()->type)=='1' || (Auth::user()->type)=='2' || (Auth::user()->type)=='3')
                <a href="{{ url('admin/compra/ordenes') }}">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">3</div>
                                    <div>Ordenes de compra</div>
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
               
                
                <a href="">
                <div class="col-lg-6 col-md-6">
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
                        </a>
                     </div>
                </div>
                 </a>
            @endif
        

    </div>    
    
    </div>
      
        <!-- /#page-wrapper -->

  @stop