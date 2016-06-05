						<div class="form-group">
							{!! Form::label('licor', 'Nombre del Licor') !!}
                            
								{!! Form::text('licor', null, ['class' => 'form-control', 'placeholder' => 'Ej: Santateresa, Carta Roja', 'title' => 'Ingrese su nombre']) !!}
						</div>

						<div class="form-group">
						    {!! Form::label('type_liq', 'Unidad de medida') !!}

							{!! Form::select('type', array('admin' => 'Kg', 'root' => 'Gr', 'mersonero' => 'L', 'cocinero' => 'Ml'), null, ['class' => 'form-control']);
							!!}
						</div>


						<div class="form-group">
						    {!! Form::label('type_liq', 'Selecione el Proveedor') !!}

							{!! Form::select('type', array('admin' => 'Alimentos Polar', 'root' => 'Juana', 'mersonero' => 'Pepsico', 'cocinero' => 'Jacks', 'cocinero' => 'Santa Teresa'), null, ['class' => 'form-control']);
							!!}
						</div>
