$(document).ready(function(){
  $('.editar').on('click', function(e){
    e.preventDefault();
    $('.cantidad').prop('disabled', false);
    $('.hide').addClass('show');
  });
});
