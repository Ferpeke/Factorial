$(document).ready(function () {

  function valida_vacios_registro() {
    if ($('#nombre').val() == "") {
      swal('Upps', 'Ingresa tu "nombre" por favor', 'warning');
      return false;
    } else if ($('#paterno').val() == "") {
      swal('Upps', 'Ingresa tu "apellido paterno" por favor', 'warning');
      return false;
    } else if ($('#materno').val() == "") {
      swal('Upps', 'Ingresa tu "apellido materno" por favor', 'warning');
      return false;
    } else if ($('#email').val() == "") {
      swal('Upps', 'Ingresa tu "mail" por favor', 'warning');
      return false;
    } else if ($('#contrasenia').val() == "") {
      swal('Upps', 'Ingresa tu "password" por favor', 'warning');
      return false;
    } else {
      $.ajax({
        type: 'POST',
        url: 'control/registro.php',
        data: $('#formulario_registro').serialize(),
        success: resultado => {
          if (resultado == 1) {
            swal('Muy bien..!', 'Ya eres un "Sacro"', 'success');
            $('#formulario_registro')[0].reset();

            setTimeout(() => {
              window.location = 'index';
            }, 2000);


          } else {
            console.log(resultado);
            swal('Valio PoPo', 'Preguntale al gabo', 'error');
            $('#formulario_registro')[0].reset();
          }
        }
      });

    }
  }

  $('#registrar').click(function () {
    valida_vacios_registro();

  });


});