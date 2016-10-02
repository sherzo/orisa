<!-- Modal -->
<div class="modal fade" id="iniciar-sesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group input-group">
                       <span class="input-group-addon"><i class="fa fa-user"></i>
                        </span>
                       <input class="form-control" name="user" placeholder="Usuario">
            </div>
            <br>
            <div class="form-group input-group">
                       <span class="input-group-addon"><i class="fa fa-lock"></i>
                        </span>
                       <input type="password" class="form-control" name="contra" placeholder="Contraseña">
            </div>
            <center>¿No tiene una cuenta? <a href="" class="text-info" data-target="#registro_vip" data-dismiss="modal" data-toggle="modal">Cree una.</a><br><br>
            <a href="" class="text-info">Olvido mi contraseña.</a>
            </center>
        </form>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-target="registro_vip" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Entrar</button>
      </center>
      </div>
    </div>
  </div>
</div>