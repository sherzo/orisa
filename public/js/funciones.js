$(document).ready(function(){

	$('#reload').click(function() {
			location.reload();
	});

	$('#sigin').submit( function(){

			if($("#datos").is(':empty')){

					var nacionalidad = $('#nacionalidad').val();
					var documento = $('#cedula').val();


					$("#contenido").empty();
					$("#sigin").attr('class', '');

					$("#contenido").append('<center><img src="img/cargando.gif"></center>');

					$.get("search/"+nacionalidad+documento+"", function(data){

							$("#contenido").css("display", "none");

							if($(data).length)
							{
								$.each(data, function(index, typeObj){

												$("#contenido").empty();

												$(".boton").text('CREAR');

												$("#datos").empty();
												$("#datos").append('<div class="alert alert-success" role="alert">Bienvenido <strong>'+typeObj.nombre+'</strong> proceda a crear su cuenta.</div>'+
																	'<div class="form-group"><label for="usuario">Usuario</label>'+
																	'<input type="text" class="form-control" name="user"></div>'+
																	'<div class="form-group"><label for="contrasena">Contraseña</label>'+
																	'<input type="password" class="form-control" name="password"></div>'+
																	'<input type="hidden" value="'+typeObj.id+'" name="id_client">'+
																	'<input type="hidden" value="1" name="roles_id">')
									});

							}else{

								$('.boton').attr("disabled", true);
								$('#datos').append('<div class="alert alert-warning">'+
											 '<em>'+
											 'No se encontraron resultados coincidentes para '+nacionalidad+documento+' usuario no existe en nuestra base de datos.'+
											 '</em>'+
											 '</div>')

							}

					});

					return false;
			}
	});

/*
*	Función para empleado
*/
$(document).ready(function(){

	$("#contrato").on('change', function(e) {

		var contrato = e.target.value;

		if(contrato == 'Determinado'){

			$("#duracion").removeAttr('disabled');

		}else{

			$("#duracion").attr('disabled','disabled');
			$('#duracion').val("0");

			return false;
		}
	});
});
/*
*	Función para reservaciones
*/

$("#hora").on('change', function(e){

	var fecha = $("#fecha").val();
	var hora = e.target.value;
	// var solicitud = fecha+' '+hora;
	if(fecha!= ''){
		$.get("solicitud-reservacion/" + fecha + '/' + hora, function(data){

			$('#contenedor').empty();
			$.each(data, function(index, typeObj){
				var image = 'mesa';
				var status = 'Disponible';
				var checkbox = '<input type="checkbox" name="mesas_reservadas[]" value="'+index+'">';
				if(typeObj){
					image = 'mesa-ocupada';
					status = 'Ocupada';
					checkbox = '';
				}

				var render = '<div class="col-md-2 col-sm-6 portfolio-item" id="seleccionado">'+
							'<a href="#" class="portfolio-link seleccionado" data-toggle="modal">'+
							'<div class="portfolio-hover '+ status +'"><div class="portfolio-hover-content">'+
							'<i class="fa fa-plus fa-3x"></i></div></div><img src="img/tables/'+image+'.png"'+
							'class="img-responsive" alt=""></a><div class="portfolio-caption">'+
							'<em><p class="text-muted"> #'+ index + ' '+ status +'</p><em>'+checkbox+'</div></div>';
				$('#contenedor').append(render);
			});

			$(".portfolio-seleccionado").on('click', function(){
				if(!$(this).hasClass('Ocupada')){
				$(this).attr('class', 'portfolio-hover');
			}

			});



		});

	}// if

});// evento change

});// Fin jQuery
