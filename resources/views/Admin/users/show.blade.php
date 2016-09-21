@extends('layouts.app')

@section('contenido')
	<div class="row"><br>
    <div class="col-lg-8 col-md-12 col-lg-offset-2">
<!--      <h1 class="page-header">Perfil</h1>
 -->        <div class="panel panel-primary">
            <div class="panel-heading">
                Perfil 
                @if(Auth::user()->roles_id == '1')<span class="label label-primary pull-right">SperSU</span>
                @endif
                @if(Auth::user()->roles_id == '2')<span class="label label-primary pull-right">Admin</span>
                @endif
            </div>
            <div class="panel-body">
                {{ Form::model($user, array('route' => array('admin.usuarios.update', $user->id), 'method' => 'PUT')) }}
                <div class="col-xs-6 col-md-3 col-lg-2">
    				<a href="#" class="thumbnail">
     		 			<img src="../../img/ingresar.jpg" alt="...">
    				</a>
    				</h1>  
    			</div>
  				<div class="col-md-8 col-lg-9">
  				<h1 class="page-header">{{ Auth::user()->name }}
                        
                     </div>		
                       <div class="col-lg-1"><br><br><br><a><i class="fa fa-pencil pull-right"></i></a></div>		
<br><br><br><br><br><br>
                   <!-- <div class="form-group large-input">
                       <label>Nombre</label>
                       <input class="form-control input-lg" value="" id="inputSuccess">
                    </div><br><br><br> -->
                
                	<label>Usuario</label>
                    <div class="form-group input-group">
                       <span class="input-group-addon"><i class="fa fa-user"></i>
                        </span>
                       <input class="form-control input-lg" value="{{ Auth::user()->user }}" name="user">
                    </div>
                    <label>Correo</label>
                    <div class="form-group input-group">
                       <span class="input-group-addon"><i class="fa fa-envelope" name="email"></i>
                        </span>
                       <input class="form-control input-lg"
                       value="{{ Auth::user()->email }}" name="email">
                    </div>
                    <label>Contraseña</label>
                    <div class="form-group input-group">
                       <!-- <label>Contraseña</label> -->
						<span class="input-group-addon"><i class="fa fa-lock"></i>
                        </span>                       <input type="password" class="form-control input-lg" name="password">
                       
                    </div>
                    <p class="help-block">Deje en blanco si no desea cambiarla</p>
                    <center>
					<button class="btn btn-primary btn-sm">
						<span class="fa fa-save fa-2x"></span>
					</button>
            		</center>

            	{!! Form::close() !!}
        	</div>                
    </div>
</div>
@endsection