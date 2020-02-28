function reFresh()

{
  $('#Eliminado').addClass('hidden');
  $('#actualizado').addClass('hidden');
  
}

var repeticion = window.setInterval("reFresh()", 3000);