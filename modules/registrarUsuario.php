<!DOCTYPE html>
<html lang="en">

<head>
  <title>REGISTRAR USUARIO</title>
</head>

<body>
  <div class="titulo">
    Registrar usuario
  </div>
  <div class="formulario-registrar">
    <form action="dashboard.php?mod=registrarUsu" method="post" enctype="multipart/form-data" class="ui form">
      <div class="two fields">
        <div class="field">
          <label for="documento">N° Documento</label>
          <input type="number" name="documento" id="documento" required>
        </div>
        <div class="field">
          <label for="tipoDocumento" required>Tipo Documento</label>
          <select class="selecciones" name="tipoDocumento" id="tipoDocumento">
            <option>Seleccione</option>
            <option value="TI">Tarjeta identidad</option>
            <option value="CC">Cedula ciudadania</option>
            <option value="CE">Cedula extranjera</option>
            <option value="PP">Pasaporte</option>
          </select>
        </div>
      </div>

      <div class="four fields">
        <div class="field">
          <label for="Pnombre">Primer Nombre</label>
          <input type="text" name="primerNombre" id="Pnombre" required>
        </div>
        <div class="field">
          <label for="Snombre">Segundo Nombre</label>
          <input type="text" name="segundoNombre" id="Snombre">
        </div>
        <div class="field">
          <label for="Papellido">Primer Apellido</label>
          <input type="text" name="primerApellido" id="Papellido" required>
        </div>
        <div class="field">
          <label for="Sapellido">Segundo Apellido</label>
          <input type="text" name="segundoApellido" id="Sapellido" required>
        </div>
      </div>

      <div class="four fields">
        <div class="field">
          <label for="">Fecha Nacimiento</label>
          <input type="date" name="fechaNacimiento" id="" required>
        </div>
        <div class="field">
          <label for="">Sexo</label>
          <select class="selecciones" name="sexo" id="seleccioneSexo" required>
            <option>Seleccione</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
          </select>
        </div>
        <div class="field">
          <label for="">Telefono</label>
          <input type="number" name="telefono" id="" required>
        </div>
        <div class="field">
          <label for="">Direccion</label>
          <input type="text" name="direccion" id="" required>
        </div>
      </div>

      <div class="two fields">
        <div class="field">
          <label for="tipoUsuario">Rol del usuario</label>
          <select name="rol" id="tipoUsuario" required>
            <option>Seleccione</option>
            <option value="docente">Docente</option>
            <option value="estudiante">Estudiante</option>
            <option value="administrador">Administrador</option>
          </select>
        </div>
        <div class="field">
          <label for="">Foto usuario</label>
          <div class="input-file">
            <p class="text-iput-file"> <i class="hand point right icon"></i> Seleccionar foto</p>
            <input type="file" name="foto" id="imagen" onchange="vistaPreliminar(event)" class="btn-file" required>
          </div>
          <div class="preliminar">
            <img src="" alt="" id="fotoUsuario">
          </div>
        </div>
      </div>
      <button type="submit" name="btn-registrar" class="continuar">Continuar con el registro</button>
    </form>
  </div>
</body>

</html>