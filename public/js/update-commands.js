$(document).ready(function(){

var label = $('.estatus').text();

	function ActualizarComandas(){
		$.get('en-espera/actualizar', function(data){
			
				$.each(data, function(index, typeObj){

					$('.estatus'+typeObj.id).empty();
					$('.estatus'+typeObj.id).text(typeObj.estatus);
					if(typeObj.estatus == 'Lista'){
						$('.estatus'+typeObj.id).removeClass('label-warning');
						$('.estatus'+typeObj.id).addClass('label-primary');
						$('#contenedor'+typeObj.id).empty();
						$('#contenedor'+typeObj.id).append('<button class="btn btn-primary btn-xs"><span class="fa fa-money fa-2x"></span></button>')

					}
				});

		});
	}
	
	setInterval(ActualizarComandas, 2000);
	

});