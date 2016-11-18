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
            <div class="col-md-1">
                <img src="{{ asset('img/logo/isotipo.png') }}" width="60" height="80">

            </div>
            <div class="col-md-4">
                <h3>Recibo</h3>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4"><strong>Mesa: </strong> </div>

                        <div class="col-md-4"><strong>Fecha: </strong> </div>
                        <br><br>

                        <div class="col-md-6 col-md-offset-1"><strong>Cliente:</strong> <span id="nombre"></span> </div>
                        <div class="col-md-5"><strong>Cedula o Rif:</strong> <span id="cedula"></span></div>

                
            </div>
            <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
</body>
</html>