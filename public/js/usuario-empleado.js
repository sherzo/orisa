$(document).ready(function() {
  $('#empleado').on('click', function() {

      if($("#empleado:checked").val()==1) {
          $('.nombre').append(' ');
      }

  });
});
