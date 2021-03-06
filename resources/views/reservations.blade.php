 <!-- Portfolio Grid Section -->
    <section id="reservations" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Panel de reservaciones</h2>
                    <h3 class="section-subheading text-muted">Información sobre sus reservaciones</h3>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                @include('flash::message')
              </div>
            </div>
            @if($reservaciones->count() == 0)
            {!! Form::open(['route' => 'reservaciones.store', 'method' => 'POST', 'name' => 'sentMessage', 'novalidate']) !!}
             <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Fecha</label>
                            <input type="text" class="form-control" placeholder="" id="datepicker" required data-validation-required-message="Please enter your name." data-toggle="tooltip" data-placement="top" title="Fecha de la reservación" name="fecha_reservacion">
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
        @endif

        @if($reservaciones != '[]')
        <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center section-heading">Listado</h1>
        </div>
            <div class="col-lg-12">
              <div class="table-responsive">
                <table class="table  table-bordered table-condensed table-hover">
                    <thead class="bg-yelow">
                      <tr>
                        <th class="text-center"><h4 class="none">Mesa</h4></th>
                        <th class="text-center"><h4>Fecha</h4></th>
                        <th class="text-center"><h4>Hora</h4></th>
                        <th class="text-center"><h4>Estatus</h4></th>
                        <th class="text-center"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($reservaciones as $reservacion)
                        <tr class="active">
                          <td class="text-center"><h4>
                            #{{$reservacion->table->id }}</h4>
                          </td>
                          <td class="text-center"><h4>{{ fecha($reservacion->fecha_reservacion) }}</h4></td>
                          <td class="text-center"><h4>{{ hora($reservacion->hora_reservacion) }}</h4></td>
                          <td class="text-center">
                            <h4>
                              <label class="label label-{{ $reservacion->estatus == 'Sin confirmar' ? 'warning' : 'success'}}">
                                {{ $reservacion->estatus }}
                              </label>
                            </h4>
                          </td>
                          <td class="text-center">
                            <a class="btn btn-danger btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm{{ $reservacion->id }}">
                              <span class="fa fa-remove fa-2x">
                              </span>
                            </a>

                            <div class="modal fade bs-example-modal-sm{{ $reservacion->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              							  <div class="modal-dialog" role="document">
              								    <div class="modal-content">
              								    <div class="modal-header bg-danger">
              								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              								        <center><h3 class="modal-title">Cancelar</h3></center>
              								      </div>
              								      <div class="modal-body">
                                      <center><br><br>
                                        <h4>¿Desea cancelar la reservacion del dia: <br>{{ fecha($reservacion->fecha_reservacion) }}?</h4><br><br><br>

                                      <a href="{{ route('reservaciones.destroy', $reservacion->id)}}" class="btn btn-success pull-left">Cancelar</a>

              								        <a href="" class="btn btn-danger " data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove"></span></a>
                                    </center>

                                    </div>
              								    </div>
              		  						</div>
              							</div>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </table>
            </div>
        </div>
        @endif
    </div>
</section>
