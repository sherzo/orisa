 <!-- Portfolio Grid Section -->
    <section id="reservations" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Panel de reservaciones</h2>
                    <h3 class="section-subheading text-muted">Información sobre sus reservaciones</h3>
                </div>
            </div>
            {!! Form::open(['route' => 'reservaciones.store', 'method' => 'POST', 'name' => 'sentMessage', 'novalidate']) !!}
             <div class="row">
                    
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Fecha</label>
                            <input type="date" class="form-control" placeholder="" id="fecha" required data-validation-required-message="Please enter your name." data-toggle="tooltip" data-placement="top" title="Fecha de la reservación" name="fecha_reservacion">
                            <p class="help-block">Seleccione la Fecha</p>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label>Hora</label>
                            <select class="form-control" id="hora" data-toggle="tooltip" data-placement="top" title="Hora de la reservación" name="hora_reservacion">
                                <option value="9:00:00">9:00 am</option>
                                <option value="10:00:00">10:00 am</option>
                                <option value="11:00:00">11:00 am</option>
                                <option value="12:00:00">12:00 am</option>
                                <option value="13:00:00">1:00 pm</option>
                                <option value="14:00:00">2:00 pm</option>
                                <option value="15:00:00">4:00 pm</option>
                                <option value="16:00:00">5:00 pm</option>
                                <option value="17:00:00">6:00 pm</option>
                                <option value="18:00:00">7:00 pm</option>
                                <option value="19:00:00">8:00 pm</option>
                                <option value="20:00:00">9:00 pm</option>
                            </select>
                            <p class="help-block">Seleccione la hora</p>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                        <label>Alguna especificación</label>
                            <textarea class="form-control" data-toggle="tooltip" data-placement="top" title="Algo en que podamos ayudarlo (Ej: dos mesas juntas)" name="especificacion"></textarea>
                        </div>
                        
                            <button type="submit" class="btn btn-primary btn-xl" data-toggle="tooltip" data-placement="top" title="Realizar reservación" >
                                Reservar
                            </button>
                        </div>
                    
                    <div id="contenedor">
                    </div>   
        </div>
        {!! Form::close() !!}
        <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center section-heading">Mis reservaciones</h1>
        </div>
            <div class="col-lg-12">
                <table class="table  table-bordered table-condensed table-hover">
                    <thead class="bg-yelow">
                        <th><h3 class="none">Mesa</h3></th>
                        <th><h3>Fecha</h3></th>
                        <th><h3>Hora</h3></th>
                        <th><h3>Estatus</h3></th>
                    </thead>
                    <tbody>
                        <tr class="active">
                            <td><h4>#2</h4></td>
                            <td><h4>miercoles 30 de septiembre</h4></td>
                            <td><h4>9:00 am</h4></td>
                            <td><h4><span class="label label-danger" data-toggle="tooltip" data-placement="top" title="Ingrese a su correo para confirmar">Sin confirmar</span></h4></td>
                        </tr >
                                                <tr class="active">
                            <td><h4>#3</h4></td>
                            <td><h4>miercoles 30 de septiembre</h4></td>
                            <td><h4>9:00 am</h4></td>
                            <td><h4><span class="label label-success" data-toggle="tooltip" data-placement="top" title="Reservación confirmada">Confirmada</span></h4></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>