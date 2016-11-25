<div class="modal fade active" id="registro_vip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" id="reload">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registro de cliente VIP</h4>
            </div>
            {!! Form::open(['route' => 'usuario-vip.store', 'method' => 'POST', 'id' => 'sigin', 'class' => 'form-inline']) !!}
                <div class="modal-body">
                    <div class="text-center" id="contenido">
                        <div class="form-group">
                            <select class="form-control" id="nacionalidad">
                                <option value="V-">V</option>
                                <option value="J-">J</option>
                                <option value="E-">E</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="cedula" name="dni_cedula" placeholder="CÉDULA O RIF" pattern="[0-9]{7,8}" required> &nbsp;<span class="text-danger">*</span>
                        </div>
                    </div>
                    <div id="datos"></div>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                          <button type="button" class="btn btn-default" id="reload" data-toggle="tooltip" data-placement="bottom" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary boton" data-toggle="tooltip" data-placement="bottom">BUSCAR</button>
                    </div>
                </div>

          {!! Form::close() !!}
      </div>
    </div>
</div>
