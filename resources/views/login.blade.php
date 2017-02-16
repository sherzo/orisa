<!-- Modal -->
 <form  role="form" method="POST" action="{{ url('/iniciarsesion') }}">
 <div class="modal fade" id="iniciarsesion" tabindex="1" role="dialog" arialabelledby="myModalLabel">
   <div class="modaldialog " role="document">
   
             {{ csrf_field() }}
     <div class="modalcontent">
       <div class="modalheader">
         <button type="button" class="close" datadismiss="modal" arialabel="Close"><span ariahidden="true">&times;</span></button>
         <h4 class="modaltitle" id="myModalLabel">Iniciar Sesión</h4>
       </div>
       
       <div class="modalbody">
       
             <div class="formgroup inputgroup">
                        <span class="inputgroupaddon"><i class="fa fauser"></i>
                         </span>
                        <input class="formcontrol" name="user" placeholder="Usuario">
             </div>
             <br>
             <div class="formgroup inputgroup">
                        <span class="inputgroupaddon"><i class="fa falock"></i>
                         </span>
                        <input type="password" class="formcontrol" name="password" placeholder="Contraseña">
             </div>
             <center>¿No tiene una cuenta? <a href="" class="textinfo" datatarget="#registro_vip" datadismiss="modal" datatoggle="modal">Cree una.</a><br><br>
             <a href="" class="textinfo">Olvido mi contraseña.</a>
             </center>
       </div>
     
       <div class="modalfooter">
       <center>
         <button type="submit" class="btn btndefault" datatarget="registro_vip" datadismiss="modal">Cerrar</button>
         <button type="submit" class="btn btnprimary">Entrar</button>
       </center>
 
       </div>
       
     </div>
     
   </div>
 </div>
 </form> 