$(document).ready(function(){

	$('#buscar').on('click', function(){
		var nacionalidad = $('#nacionalidad').val();
		var documento = $('#documento').val();

		$.get('facturar/cliente/' + nacionalidad+documento, function(data){
			if(data == ''){
				$('#nombre').text('');
				$('#cedula').text('');
				$('#cliente').val('');

				var comanda_id = $('#id').val();
				$('#mensaje').append('<div class="alert alert-danger">El cliente con el documento: <strong>'+nacionalidad+documento+'</strong> no esta registrado</div>');
				var url_actual =  document.domain;
				window.location = 'cliente-nuevo?literal='+nacionalidad+'&cedula='+documento+'&comanda='+comanda_id;
			}else{
				    $('#nombre').text('');
					$('#cedula').text('');
					$('#cliente').val('');
				$.each(data, function(index, cliente){
					console.log(cliente.nombre);
					$('#nombre').append(cliente.nombre);
					$('#cedula').append(cliente.dni_cedula);
					$('#cliente').val(cliente.id);
				});

				$('#mensaje').append('<div class="alert alert-success">¡Perfecto! El cliente con el documento: <strong>'+nacionalidad+documento+'</strong> fue encontrado</div>');
				$('#boton_procesar').attr('disabled', false);
				$('#boton_procesar').attr('data-original-title', 'Procesar Factura');
			}
		$('div.alert').not('.alert-important').delay(5000).fadeOut(350);

		});


	});
});
