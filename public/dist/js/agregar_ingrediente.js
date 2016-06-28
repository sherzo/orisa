	$(document).ready(function(){

	$('.btn-agregar').click(function(e){

		e.preventDefault();

		var cantidad = $("#cantidad").val();
		var id_ingrediente = $("#id_ingrediente").val();
		var unidad = $("#unidad").val();

		
		if(cantidad != ''){
			$("div.alert").attr('class', 'hide');
			$.ajax({	
				url: 'http://localhost/orisa/public/admin/platos/addIngredient',
				type: 'POST',
				data: {'id_ingrediente': id_ingrediente, 'cantidad': cantidad, 'unidad': unidad,},
				dataType: 'json',
				success: function(data){


					if(data.success==true){

						var html = '<tr><td>'+data.id+'</td><td>'+data.cantidad+'</td><td>'+data.unidad+'</td></tr>';

						$("#fila").html('');
						$("#list_ingredient").load('http:/localhost/orisa/public/lista_ingredientes');
						
					}else{
			
						$("div.alert").attr('class', 'show alert alert-danger');
					}
				}

			});
		}else {

			$("div.msj").attr('class', 'has-error');
			$("div.alert").attr('class', 'show alert alert-danger');
	}
	});
});