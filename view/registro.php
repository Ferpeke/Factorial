
<div class="container">
  <div class="row justify-content-center mt-4">
    <div class="col-sm-4 bg-white rounded p-4 shadow">
      <div class="text-center">
        <h1><i class="fab fa-wpforms"></i></h1>
        <h1 style="font-family: monospace;">Registro</h1>


      </div>
      <form class="form-group" id="formulario_registro">
        <div>
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required="" autocomplete="off">
        </div>
        <div>
          <label for="paterno">Apellido Paterno:</label>
          <input type="text" class="form-control" id="paterno" name="paterno" required="" autocomplete="off">
        </div>
        <div>
          <label for="materno">Apellido Materno:</label>
          <input type="text" class="form-control" id="materno" name="materno" required="" autocomplete="off">
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required="" autocomplete="off">
        </div>
        <div>
          <label for="contrasenia">Contraseña:</label>
          <input type="password" class="form-control" id="contrasenia" name="contrasenia" required="" autocomplete="off">
        </div>
      </form>
      <div class="mt-3">
        <span class="btn btn-info w-100 btm-control" id="registrar">Registrar</span>
      </div>
      <div class="text-center mt-1">
        <a class="btn btn-dark" href="login">cancelar</a>
      </div>
    </div>
  </div>
</div>