$(document).ready(() => {

  $('#btn_limpiar').click(() => {
    $('#numero_factorial').val('');
  });

  $('#btn_calcular').click(() => {

    if ($('#numero_factorial').val() == '') {
      swal('Ups..!', 'No has escrito ningun número', 'warning');

    } else {
      factorial();
    }

  });


  function factorial() {
    let numero_fact = parseInt($('#numero_factorial').val());
    let proceso = '';
    let resultado = 1;
    if (numero_fact < 0) {
      swal('Ups..!', 'Solo número Positivos y enteros', 'error');
      $('#numero_factorial').val('');
    } else {
      for (let index = numero_fact; index > 0; index--) {
        proceso += index + ' x ';
        resultado *= index;

      }

      proceso = proceso.substring(0, proceso.length - 2).trim();

      alert(numero_fact)

      $.ajax({
        type: 'POST',
        url: '../control/factorial.php',
        data: {
          'proceso': proceso,
          'resultado': resultado,
          'num_factorial': numero_fact
        },
        success: resultado => {
          console.log(resultado)
          if (resultado == 1) {
            swal({
              icon: 'success',
              title: '¡Genial!',
              text: 'Se guardo este factorial correctamente.'
            });

            $('#tabla_historial').load('tabla_factorial.php');

          } else {
            console.log(resultado);
          }
        }
      });
    }

  }


});