<?php 
  include("../bd/conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/semantic.css">
  <link rel="stylesheet" href="../css/ihali.css">
  <script src="../js/jquery-3.1.1.min.js"></script>
  <script src="../js/semantic.js"></script>
  <link rel="icon" href="../img/logo_1.2.ico">
  <title>INICIO</title>
</head>
<body class="dashboard">
  <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="imagen">
          <img src="../img/logo_1.2.png" alt="logo">
        </span>
        <div class="text header-text">
          <span class="name">Notebook Techs</span>
          <span class="profession">Version 1.1</span>
        </div>
      </div>

      <i class="chevron right icon dash"></i>
    </header>
    <div class="menu-bar">
      <div class="menu-side">
        <ul class="menu-links">
          <li class="nav-link">
            <a href="inicio.html">
              <i class="home icon iconos"></i>
              <span class="text nav-text">Inicio</span>
            </a>
          </li>
          
          <li class="nav-link">
            <a href="calificaciones.html">
              <i class="paste icon iconos"></i>
              <span class="text nav-text">Calificaciones</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="materias.html">
              <i class="book icon iconos"></i>
              <span class="text nav-text">Materias</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="web.html">
              <i class="globe icon iconos"></i>
              <span class="text nav-text">Web</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="correo.html">
              <i class="envelope icon iconos"></i>
              <span class="text nav-text">Correo</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="diagramas.html">
              <i class="sitemap icon iconos"></i>
              <span class="text nav-text">Diagramas</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="configuracion.html">
              <i class="cog icon iconos"></i>
              <span class="text nav-text">Configuracion</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="perfil.php">
              <i class="user circle icon iconos"></i>
              <span class="text nav-text">Perfil</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="registrarUsuario.php">
              <i class="address card icon iconos"></i>
              <span class="text nav-text">Registra usuario</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="bottom-content">
        <li class="">
          <a href="../index.html">
            <i class="sign out alternate icon iconos"></i>
            <span class="text nav-text">Salir</span>
          </a>
        </li>

        <li class="mode">
          <div class="moon-sun">
            <i class="moon icon iconos moon"></i>
            <i class="sun icon iconos sun"></i>
          </div>
          <span class="mode-text text">Modo oscuro</span>
          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>
      </div>
    </div>
  </nav>

  <section class="modulos">
    <div class="text">
      <div class="titulo">
        Registrar usuario
      </div>
      <div class="formulario-registrar">
        <form action="tipoUsuario.php" method="post" class="ui form">
          <div class="two fields">
            <div class="field">
              <label for="documento">N° Documento</label>
              <input type="number" name="documento" id="documento">
            </div>
            <div class="field">
              <label for="tipoDocumento">Tipo Documento</label>
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
              <input type="text" name="primerNombre" id="Pnombre">
            </div>
            <div class="field">
              <label for="Snombre">Segundo Nombre</label>
              <input type="text" name="segundoNombre" id="Snombre">
            </div>
            <div class="field">
              <label for="Papellido">Primer Apellido</label>
              <input type="text" name="primerApellido" id="Papellido">
            </div>
            <div class="field">
              <label for="Sapellido">Segundo Apellido</label>
              <input type="text" name="segundoApellido" id="Sapellido">
            </div>
          </div>
        
          <div class="four fields">
            <div class="field">
              <label for="Sexo">Sexo</label>
              <Select class="selecciones" name="sexo" id="Sexo">
                <option>Seleccione</option>
                <option value="Masculino">Hombre</option>
                <option value="Femenino">Mujer</option>
                <option value="Otro">Otro</option>
              </Select>
            </div>
            <div class="field">
              <label for="fNacimiento">Fecha Nacimiento</label>
              <input type="date" name="fechaNacimiento" id="fNacimiento">
            </div>
            <div class="field">
              <label for="Telefono">Telefono</label>
              <input type="number" name="telefono" id="Telefono">
            </div>
            <div class="field">
              <label for="Direccion">Direccion</label>
              <input type="text" name="direccion" id="Direccion">
            </div>
          </div>
        
          <div class="two fields">
            <div class="field">
              <label for="tipoUsuario">Rol del usuario</label>
              <select name="rol" id="tipoUsuario">
                <option>Seleccione</option>
                <option value="Docente">Docente</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Administrador">Administrador</option>
              </select>
            </div>
            <div class="field">
              <label for="">Foto usuario</label>
              <div class="input-file">
                <p class="text-iput-file"> <i class="hand point right icon"></i> Seleccionar foto</p> 
                <input type="file" name="foto" id="imagen" onchange="vistaPreliminar(event)" class="btn-file">
              </div>
              <div class="preliminar">
                <img src="" alt="" id="fotoUsuario">
              </div>
            </div>
          </div>
          <input type="submit" class="continuar" name="btn_confirmar" value="Continuar con el registro">
        </form>
      </div>
    </div>
  </section>
  <script src="../js/sidebarNote.js"></script>
  <script src="../js/vistaPreliminar.js"></script>
</body>
</html>