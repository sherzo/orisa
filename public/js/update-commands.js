$(document).ready(function(){
var label = $('.estatus1').text();
console.log(label);
	function ActualizarComandas(){
		$.get('en-espera/actualizar', function(data){
			
				$.each(data, function(index, typeObj){

					$('.estatus'+typeObj.id).empty();
					$('.estatus'+typeObj.id).text(typeObj.estatus);
					if(typeObj.estatus == 'Lista'){
						$('.estatus'+typeObj.id).removeClass('label-warning');
						$('.estatus'+typeObj.id).addClass('label-success');
					}
				});

		});
	}
if(label != ''){
	setInterval(ActualizarComandas, 1000);
	console.log(label);
}
});