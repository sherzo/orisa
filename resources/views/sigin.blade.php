<!-- Modal -->      
<div class="modal fade active" id="registro_vip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro de cliente VIP</h4>
      </div>

      <div class="modal-body">
      {!! Form::open(['route' => 'usuario-vip.store', 'method' => 'POST', 'id' => 'sigin', 'class' => 'form-inline']) !!}
          <div id="contenido"><center>
              <span>Ingrese su Cedula o Rif</span>
          </center><br>
            
          <center>
            <div class="form-group">
              <select class="form-control" id="nacionalidad">
                <option value="V">V </option>
                <option value="J">J </option>
                <option value="E">E </option>
              </select>
            </div> - 
            <div class="form-group">
                <input class="form-control" id="cedula" name="dni_cedula" placeholder="Cedula o Rif">
            </div>       
          </center><br>
          </div>
          <div id="datos"></div>
        </div>
          <div class="modal-footer">
            <center>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary boton" data-toggle="tooltip" data-placement="top" title="Buscarme">Buscar</button>
            </center>
          </div>
          
           {!! Form::close() !!}
      </div>
     
  </div>
</div>
