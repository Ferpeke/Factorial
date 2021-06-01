$(document).ready(function(){

  function validar_vacio_inicio() {
    if ($('#usuario').val() == '') {
      swal('Upps', 'Ingresa tu "Correo" por favor', 'warning');
    } else if ($('#contrasenia').val() == '') {
      swal('Upps', 'Ingresa tu "Contraseña" por favor', 'warning');
    } else {
      $.ajax({
        type: 'POST',
        url: 'control/iniciar_sesion.php',
        data: {
          'usuario': $('#usuario').val(),
          'contrasenia': $('#contrasenia').val()
        },
        success: resultado => {

          if (resultado == 1) {

            window.location = 'view/pagina_inicio.php';

          } else {
            swal('Error', 'El usuario ó contraseña no es correcta', 'error');
          }

        }
      });
    }
  }



  $('#entrar').click(function(){
    validar_vacio_inicio();
  });
});