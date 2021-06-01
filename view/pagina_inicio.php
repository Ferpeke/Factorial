<?php

session_start();
if (isset($_SESSION['usuario'])) {


?>






  <!DOCTYPE html>
  <html lang='es'>

  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <title>FACTORIAL</title>

    <style>
      .transparente {
        opacity: 0.8;
      }

      .imagen {
        background-image: url("https://media.istockphoto.com/vectors/illustrations-of-numbers-backdrop-decoration-wallpaper-web-vector-id1125259039?s=612x612");
      }
    </style>
  </head>

  <?php

  require_once '../app/config.php';
  require_once '../app/dependencias.php';

  ?>

  <body class="bg-info">

    <div class="container mt-2 p-0">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-light bg-light justify-content-between">
            <h1 class="display-4">Calcular Factorial <i class="fas fa-exclamation"></i></h1>
            <a href="../control/cerrar_sesion.php" class="btn btn-outline-danger my-2 my-sm-0" >Salir</a>
          </nav>
        </div>
      </div>
    </div>


    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <div class="imagen">

            <div class="jumbotron bg-light transparente">
              <h1 class="display-4 text-center">¡Bienvenido! </h1>
              <hr class="my-4">
              <h3>Te daré una explicación muy rapido de lo que hace este programa!!!</h3>
              <p>Esta aplicación que te ayudará a calcular el <lol class="font-weight-bold">Factorial de cualquier número entero.</lol>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">Calcular factorial</h3>
              <hr>
              <form class="form-control">
                <label for="numero_factorial">Ingresa el Factorial:</label>
                <div class="input-group input-group-sm">
                  <input type="number" class="form-control" placeholder="Ejm. 3" aria-label="Recipient's username" aria-describedby="basic-addon2" id="numero_factorial" min="1">
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">!</span>
                  </div>
                </div>
              </form>
              <div id="resultado"></div>
              <div class="btn btn-group-lg">

                <span class="btn btn-success" id="btn_calcular">Calcular</span>

              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">Historial</h3>
              <div>
                <table class="table table-responsive-sm text-center table-striped table-borderless table-white">
                  <thead>
                    <tr>
                      <th>Num.Registros</th>
                      <th>Factorial</th>
                      <th>Procesos</th>
                      <th>Resultado</th>
                    </tr>
                  </thead>
                  <tbody id="tabla_historial"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </body>

  </html>


<?php

} else {
  header('location:../index.php');
}

?>