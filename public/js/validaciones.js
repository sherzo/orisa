$(document).ready(function(){

  var mensajes = {
    "requerido": "Este campo es requerido",
    "maximo": "Este campo debe tener un maximo de:",
    "telefono": "El telefono no debe ser menos de 7 digitos",
    "correo": "El correo no es valido, el formato correcto es: ejemplo@ejemplo.com"
  }

  function desplegarMensaje(input, msj, e)
  {
    var div = $(input).parent('.form-group');
    var span = $(input).siblings('.help-block');

    if(e)
    {
      var hijo = $(div).children('span.glyphicon');
      $(hijo).remove;
      $(div).addClass('has-error');
      $(div).append('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span');
      $(span).empty();
      $(span).append('<em><small>'+msj+'</small></em>');
    }else
    {
      var hijo = $(div).children('span.glyphicon');
      $(hijo).remove;
      $(div).removeClass('has-error');
      $(div).append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span');
      $(div).addClass('has-success');
      $(span).empty();
    }
  }

  $('.requerido').focusout(function(event) {
    var valor = $(this).val();
    if(valor == null || valor.length == 0)
    {
      desplegarMensaje(this, mensajes.requerido, true);
    }else{
      desplegarMensaje(this, mensajes.requerido, false);
    }
  });

  $('.requerido').keyup(function(event) {
    var valor = $(this).val();
    if(valor == null || valor.length == 0 || valor <=6)
    {
      desplegarMensaje(this, mensajes.requerido, true);
    }else{
      desplegarMensaje(this, mensajes.requerido, false);
    }
  });

  $('.nombre').keyup(function(event){
    var valor = $(this).val();

    if (valor == null || valor.length <= 4) {
      desplegarMensaje(this, mensajes.requerido, true);
    }else{
      desplegarMensaje(this, mensajes.requerido, false);
    }
  });

  $('.telefono').keyup(function(event){
    var valor = $(this).val();

    if (valor == null || valor.length < 7) {
      desplegarMensaje(this, mensajes.telefono, true);
    }else{
      desplegarMensaje(this, mensajes.requerido, false);
    }
  });

  $('.correo').keyup(function(){
    var valor = $(this).val();
    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (regex.test(valor.trim())) {
        desplegarMensaje(this, mensajes.correo, false);
    } else {
        desplegarMensaje(this, mensajes.correo, true);
    }

  });


}); // Fin jQuery
