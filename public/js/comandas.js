$(document).ready(function(){

	$('#eleccion').on('change', function(e){
		var eleccion = e.target.value;
		$('#tablero').empty();
		$.get('create/eleccion/' + eleccion, function(data){
			$('#tablero').empty();
			$('#tablero').append('<br>');
			if(data!= ''){
				$.each(data, function(index, typeObj){

					if(typeObj.plato != undefined){
						var img = 'plates/'+typeObj['image'].imagen; //Platos
						var nombre = typeObj.plato;
					
					}else if(typeObj.trago != undefined){

						var img = 'tragos/'+typeObj['image'].imagen; //Tragos
						var nombre = typeObj.trago;

					}else if(typeObj.bebida != undefined){

						var img = 'bebidas/'+typeObj['image'].imagen; //Bebidas
						var nombre = typeObj.bebida;

					}else if(typeObj.bebida != undefined){

						var img = 'jugos/'+typeObj['image'].imagen; // Jugos
						var nombre = typeObj.jugo;

					}else {
						$('#tablero').empty();
					}

					var render = '<div class="col-md-3"><div class="panel panel-default">'+
								'<div class="panel-body"><img src="../../img/'+img+
								'" alt="" class="img-responsive"></div><div class="panel-footer">'+
								nombre+'<button class="btn btn-xs btn-success pull-right"><span class="fa fa-plus"></span></button>'+
								'</div></div></div>';
					$('#tablero').append(render);
				});
			}
		});
	});
});