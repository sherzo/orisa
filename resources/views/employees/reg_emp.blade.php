@extends('layout.layout')

@section('reg_emp')

 	<!-- ./row -->
<div class="row"><br>
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
                    Registro de empleados 
            </div>
        		<div class="panel-body">
        			<div class="row">
        				<div class="col-lg-4">
        				<form role="form">
        				 		<div class="form-group">
                                    <label>Foto</label>
                                    <input type="file">
                                </div> 
        						<div class="form-group">
                                    <label for="recipient-name" class="control-label">Cédula</label>
                            <!-- Example Select--> 
                                <div class="input-group">
                                <div class="input-group-btn">
        							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">V <span class="caret"></span></button>
        							<ul class="dropdown-menu">
          							<li><a href="#">E</a></li>
          							<li><a href="#">J</a></li>
        							</ul>
      							</div>
      							<!-- /btn-group -->
      							<input type="text" class="form-control" aria-label="...">
      							</div>
      							<!-- /input-group-btn -->
      							</div>
      							<!-- /input-group -->
        						<div class="form-group">
                                    <label>COD - Empleado</label>
                                    <input class="form-control" placeholder="EJ - #####">
                                </div>
                                <div class="form-group">
                                    <label>Fecha de Ingreso</label>
                                    <input class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Condición ([F - FIJO] [C - CONTRATO])</label>
                                    <input class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Departamento</label>
                                    <input class="form-control">
                                </div>
                                	<div class="form-group">
                                	<label> Número de cuenta Nómina </label>
                                	<input class="form-control" placeholder="###### - #### - #### - ######">
                            	</div> 
                            	<div class="form-group">
                                    <label for="recipient-name" class="control-label">Salario</label>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control" placeholder="10000">
                                    <span class="input-group-addon">,00</span>
                                </div>
                                </div>
        				</div>
        					<div class="col-lg-4">
        						<div class="form-group">
                                	<label> Nombres </label>
                                	<input class="form-control">
                            	</div>
                            	<div class="form-group">
                                	<label> Apellidos </label>
                                	<input class="form-control">
                            	</div>
                            	<div class="form-group">
                                    <label>Dirección</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            	<div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" placeholder="#### - #######">
                                </div> 
                                <div class="form-group">
                                    <label>Móvil</label>
                                    <input class="form-control" placeholder="#### - #######">
                                </div>
                                 <div class="form-group">
                                    <label>Estado Civil</label>
                                    <input class="form-control">
                                </div>                             
        					</div>
        					<div class="col-lg-4">
        						<div class="form-group">
                                	<label> Fecha de Nacimiento </label>
                                	<input class="form-control" placeholder="## - ## - ####">
                            	</div> 
        						<div class="form-group">
                                	<label> Estado </label>
                                	<input class="form-control" placeholder="Aragua / Caracas">
                            	</div>
                            	<div class="form-group">
                                	<label> Ciudad </label>
                                	<input class="form-control" placeholder="Maracay / La Victoria">
                            	</div>                          
                            	<div class="form-group">
                                	<label> Género </label>
                                	<input class="form-control">
                            	</div>
                            	<div class="form-group">
                                	<label> Email </label>
                                	<input class="form-control">
                            	</div>
                            	<div class="form-group">
                                	<label> Cargo </label>
                                	<input class="form-control">
                            	</div>
                            	<div class="form-group">
                                	<label> Turno </label>
                                	<input class="form-control">
                            	</div>
        					</div>
        					
        				</form>

        			</div>
        			<!-- ./row -->
        			<center><br><button type="submit" class="btn btn-default">&nbsp;&nbsp;Enviar&nbsp;&nbsp;</button>
                    <button type="reset" class="btn btn-default">&nbsp;&nbsp;Borrar&nbsp;&nbsp;</button></center>
				</div>
				<!-- /.panel.body -->
		</div>
		<!-- /.panel-default -->
	</div>   
	<!-- /.col-lg-12 -->
</div>
<!-- ./row -->
</div>
<!-- ./page-wrapper -->

@endsection