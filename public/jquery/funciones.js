$('#types').on('change', function(e){
    var type = e.target.value;
        
    $.get('create/ingredients/' + type, function(data){
               
        $('#ingredients1').empty();
        $('#ingredients1').append('<table class="table table-hover table-bordered">'+
          '<thead><tr><th>id</th><th>ingrediente</th><th>Agregar</th></tr></thead>'+
          '<tbody id="ingredients"></tbody></table>');

        if(data == ''){
            $('#ingredients').append(
                    '<tr><td colspan="3" align="center"> No hay ingredintes de este tipo</td>');

        }else{ 
            
            $.each(data, function(index, typeObj){
            
            
                $('#ingredients').append(
                    '<tr><td>'+ typeObj.id +'</td>'+
                    '<td>'+ typeObj.ingrediente + '</td>'+
                    '<td align="center"><a class="agregar btn btn-success btn-xs pull-center"'+
                    'type="'+ typeObj.id+'" title="Agregar">'+
                    '<span class="glyphicon glyphicon-plus"></span></a>'+
                    '</td></tr>'
                 );
                
            });
        }
                
            $('.agregar').on('click', function(){
                    
                var id_i = $(this).attr('type');
                                   
                $.get('create/addingredient/' + id_i, function(data){

                $('#Tagregados').append(
                    '<tr class="nuevo success" ><td><input type="hidden" name="id_ingredientes[]" value="'+data['ingredient'][0].id +'">'+ data['ingredient'][0].id +
                    '</td><td>' + data['ingredient'][0].ingrediente + 
                    '</td><td><input type="text" name="cantidades_i[]" class="form-control"></td><td>'+
                    '<select class="form-control" name="unidades_i[]"><option value="'+ data['units'][0].id +' ">'+ data['units'][0].unidad +'</option> '+
                    '<option value="'+ data['units'][1].id +' ">'+ data['units'][1].unidad +
                    '</option> '+
                    '<option value="'+ data['units'][2].id +' ">'+ data['units'][2].unidad +
                    '</option> '+
                    '<option value="'+ data['units'][3].id +' ">'+ data['units'][3].unidad +
                    '</option> '+
                    '<option value="'+ data['units'][4].id +' ">'+ data['units'][4].unidad +
                    '</option> '+
                    '</td><td align="center"><a class="btn btn-sm btn-danger remove" title="Remover">'+
                    '<span class="fa fa-times"></span></a>'
                );
            
                    // Funcion para remover los igredientes agregados
                    $('.remove').on('click', function(){

                            $(this).parents('tr').first().remove();
                    });

            });//FIN SEGUNDA PETICION AJAX
                
        });
            
    });//FIN PRIMERA PETICION AJAX
            
});//FIN DE TODA LA FUNCION JQUERY
        

//------------------------------------ FUNCION DE AGREGAR LICORES ----------------------------------------//

$('#types_liqueurs').on('change', function(e){
    var type = e.target.value;

        
    $.get('create/liqueurs/' + type, function(data){
               
        $('#lista_licores').empty();
        $('#lista_licores').append('<table class="table table-hover table-bordered">'+
          '<thead><tr><th>id</th><th>Licor</th><th>Agregar</th></tr></thead>'+
          '<tbody id="list_liqueurs"></tbody></table>');

        if(data == ''){
            $('#ingredients').append(
            '<tr><td colspan="3" align="center"> No hay licores de este tipo</td>');

        }else{ 
            $.each(data, function(index, typeObj){
                        
                $('#list_liqueurs').append(
                    '<tr><td>'+ typeObj.id +'</td>'+
                    '<td>'+ typeObj.licor + '</td>'+
                    '<td align="center"><a class="agregar_l btn btn-success btn-sm pull-center"'+
                    'type="'+ typeObj.id+'" title="Agregar">'+
                    '<span class="glyphicon glyphicon-plus"></span></a>'+
                    '</td></tr>'
                 );
                    
            });
        }
             
            $('.agregar_l').on('click', function(){
                    
                var id_l = $(this).attr('type');
                                   
                $.get('create/addliqueur/' + id_l, function(data){

                $('#licores_agregados').append(
                    '<tr class="nuevo success" ><td><input type="hidden" name="id_licores[]" value="'+data['liqueur'][0].id+'">'+ data['liqueur'][0].id +
                    '</td><td>' + data['liqueur'][0].licor + 
                    '</td><td><input type="text" name="cantidades_l[]" class="form-control"></td><td>'+
                    '<select name="unidades_l[]" class="form-control"><option value="'+ data['units'][0].id +' ">'+ data['units'][0].unidad +'</option> '+
                    '<option value="'+ data['units'][1].id +' ">'+ data['units'][1].unidad +
                    '</option> '+
                    '<option value="'+ data['units'][2].id +' ">'+ data['units'][2].unidad +
                    '</option> '+
                    '<option value="'+ data['units'][3].id +' ">'+ data['units'][3].unidad +
                    '</option> '+
                    '<option value="'+ data['units'][4].id +' ">'+ data['units'][4].unidad +
                    '</option> '+
                    '</td><td align="center"><a class="btn btn-sm btn-danger remove_l" title="Remover">'+
                    '<span class="fa fa-times"></span></a>'
                );
            
                    // Funcion para remover los igredientes agregados
                    $('.remove_l').on('click', function(){

                            $(this).parents('tr').first().remove();
                    });

            });//FIN SEGUNDA PETICION AJAX
                
        });
           
    });//FIN PRIMERA PETICION AJAX
            
});//FIN DE TODA LA FUNCION JQUERY
