<!DOCTYPE html>
<html>
<head>
    <title>Recibo</title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('img/logo/isotipo.png') }}" width="80" height="110" class="img-resposive">
                 <h3>Recibo N° 12234-0{{ $comanda->id}}</h3>
            </div>
            
               
            
            </div>
            <div class="row">
            <div class="col-md-4"><strong>Mesa: </strong> {{ $mesa[0]->id }} </div>

                        <div class="col-md-4"><strong>Fecha:</strong> {{ $comanda->created_at}} </div>
                        <br><br>

                        <div class="col-md-4"><strong>Cliente:</strong> {{ $cliente[0]->nombre }} </div>
                        <div class="col-md-4"><strong>Cedula o Rif:</strong> {{ $cliente[0]->dni_cedula }} </div>

                
            </div>
            <div class="row">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </thead>
                    <tbody>
                                @include('admin.comandas.partials.invoice.plates')

                                @include('admin.comandas.partials.invoice.beverages')
                                @include('admin.comandas.partials.invoice.drinks')
                                @include('admin.comandas.partials.invoice.juices')
                                
                                @include('admin.comandas.partials.invoice.footer')
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
</body>
</html>