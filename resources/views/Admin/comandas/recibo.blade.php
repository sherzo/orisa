<!DOCTYPE html>
<html>
<head>
    <title>Recibo</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('img/logo/isotipo.png') }}" width="90" height="120" class="img-resposive">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
                 <span style="font-size: 28px;">Recibo N° 0320-0{{ $comanda->id}}</span>
            </div>
            
            
            </div>
               <div class="row">
               <div class="col-md-10">  
                   <table class="table ">
        <tr>
            <td><span style="font-size: 16px;"><strong>Mesa:</strong> #{{ $mesa[0]->id }}</span></td>
            <td><span style="font-size: 16px;"><strong>Fecha:</strong> {{ $comanda->created_at }}</span></td>
        </tr>
        <tr>
            <td><span style="font-size: 16px;"><strong>Cliente:</strong> {{ $cliente[0]->nombre }}</span></td>
            <td><span style="font-size: 16px;"><strong>Cedula O Rif:</strong> {{ $cliente[0]->dni_cedula }}</span></td>
        </tr>
        <tr><td>    </td>
        <td></td></tr>
    </table></div>
               </div>
            
 

            <div class="row">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio unitario (bs)</th>
                        <th>Importe (bs)</th>
                        </tr>
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