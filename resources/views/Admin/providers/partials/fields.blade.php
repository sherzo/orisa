@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
						<div class="form-group">
							{!! Form::label('rif', 'Rif') !!}
                            <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon">J -</span>
								{!! Form::text('rif', null, ['class' => 'form-control', 'title' => 'Ingrese su nombre']) !!}
							
							</div>
						</div>
   
						<div class="form-group">
							{!! Form::label('business_name', 'Razón social') !!} 

							{!! Form::text('business_name', null, ['class' => 'form-control', 'placeholder' =>
							'Ej: Sefardi C.A', 'title' => 'Ingrese la razon social']) !!}
						</div>
          		<input type="hidden" name="id_user" value="1">
						<div class="form-group">
							{!! Form::label('addres_pro', 'Dirección fiscal') !!} 
							
							<textarea name="addres_pro" class="form-control" placeholder="Ej: Calle 5 de marzo 30-11"></textarea>
						</div>
						<div class="form-group">
							{!! Form::label('phone_pro', 'Numero de telefono') !!}
							
							{!! Form::text('phone_pro', null, ['class' => 'form-control awesome', 'placeholder' => 'Ej: 04145897451', 'title' => 'Ingrese su contraseña']) !!}
							
						</div>
						<div class="form-group"> 
							{!! Form::label('email_pro', 'Correo Electronico') !!}
							
							{!! Form::text('email_pro', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com']) !!}
						</div>
					
