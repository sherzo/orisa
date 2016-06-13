$('#buscar').click(function(){
	var literal = $('#literal').val();
	var num = $('#rif').val();
	var rif = literal + "-" + num;
	var form = $('#form-proveedor');
	var dir = form.attr('action');
	var route = dir + "/search";
	var token = $('#token').val();




	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKE': token },
		type: 'POST',
		dataType: 'json',
		data:{busqueda: rif}
	}); 
});