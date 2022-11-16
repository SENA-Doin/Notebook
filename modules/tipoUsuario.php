<?php 
  include_once("../bd/conexion.php");
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
            <a href="registrarUsuario.html">
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

  <?php
    if($_POST['rol'] == "Docente"){?>
      <section class="modulos">
        <div class="text">
          <div class="rolUsuarios">
            <div class="docente">
              <div class="titulo">
                Docente
              </div>
              <form action="../php/registroDocente.php" method="post" class="ui form">
                <div class="two fields">
                  <div class="field">
                    <label for="JornadaDocente">Jornada</label>
                    <select name="jornadaDocente" id="JornadaDocente">
                      <option>Seleccione</option>
                      <option value="Mañana">Mañana</option>
                      <option value="Tarde">Tarde</option>
                    </select>
                  </div>
                  <div class="field">
                    <label for="">Especializacion</label>
                    <input type="text" name="Especializacion" id="">
                  </div>
                </div>
                <div class="three fields">
                  <div class="field">
                    <label for="">Documento</label>
                    <?php echo "<input type='text' name='documento' value=".$_POST['documento']." id='' readonly>"; ?>
                  </div>
                  <div class="field">
                    <label for="">Correo</label>
                    <input type="email" name="CorreoDocente" id="">
                  </div>
                  <div class="field">
                    <label for="">Clave</label>
                    <input type="password" name="ClaveDocente" id="">
                  </div>
                </div>
                <input type="submit" name="btn_enviar" value="Enviar">
              </form>
            </div>
          </div>
        </div>
      </section>
      <?php
        if (isset($_POST['btn_confirmar'])){
          $documento = $_POST['documento'];
          $tipoDocumento = $_POST['tipoDocumento'];
          $primerNombre = $_POST['primerNombre'];
          $segundoNombre = $_POST['segundoNombre'];
          $primerApellido = $_POST['primerApellido'];
          $segundoApellido = $_POST['segundoApellido'];
          $sexo = $_POST['sexo'];
          $fechaNacimiento = $_POST['fechaNacimiento'];
          $telefono = $_POST['telefono'];
          $direccion = $_POST['direccion'];
          $foto = $_POST['foto'];
  
          $insertar = "INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto, Estado) VALUES ($documento, '$tipoDocumento', '$primerNombre', '$segundoNombre','$primerApellido', '$segundoApellido', '$sexo', '$fechaNacimiento', '$telefono', '$direccion', '$foto', 'claro');";
          mysqli_query($conexion, $insertar);
        }
      ?>
    <?php } elseif($_POST['rol'] == "Estudiante"){ ?>
      <section class="modulos">
      <div class="text">
          <div class="rolUsuarios">
            <div class="estudiante">
              <div class="titulo">
                Estudiante
              </div>
              <form action="../php/registroEstudiante.php" method="post" class="ui form">
                <div class="two fields">
                  <div class="field">
                    <label for="grado">Grado</label>
                    <select name="grado" id="grado">
                      <option>Seleccione</option>
                      <option value="">10</option>
                      <option value="">11</option>
                    </select>
                  </div>
                  <div class="field">
                    <label for="grupo">Grupo</label>
                    <select name="grupo" id="grupo">
                      <option>Seleccione</option>
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                    </select>
                  </div>
                </div>
                <div class="two fields">
                  <div class="field">
                    <label for="">Correo</label>
                    <input type="text" name="correoEstudiante">
                  </div>
                  <div class="field">
                    <label for="">Clave</label>
                    <input type="text" name="claveEstudiante">
                  </div>
                </div>
                <div class="four fields">
                  <div class="field">
                    <label for="docuacudi">Documento Acudiente</label>
                    <input type="text" name="documentoAcudiente" id="docuacudi">
                  </div>
                  <div class="field">
                    <label for="">Nombre acudiente</label>
                    <input type="text" name="nombreAcudiente" id="">
                  </div>
                  <div class="field">
                    <label for="">Apellido acudiente</label>
                    <input type="text" name="apellidosAcudiente" id="">
                  </div>
                  <div class="field">
                    <label for="">Telefono</label>
                    <input type="number" name="telefonosAcudiente" id="">
                  </div>
                </div>
                <div class="three fields">
                  <div class="field">
                    <label for="">Documento</label>
                    <?php echo "<input type='text' name='documento' value=".$_POST['documento']." id='' readonly>"; ?>
                  </div>
                  <div class="field">
                    <label for="">Correo</label>
                    <input type="email" name="CorreoAcudiente" id="">
                  </div>
                  <div class="field">
                    <label for="parentesco">Parentesco</label>
                    <select name="parentesco" id="parentesco">
                      <option>Seleccione</option>
                      <option value="">Padre</option>
                      <option value="">Madre</option>
                      <option value="">Acudiente</option>
                    </select>
                  </div>
                </div>
                <input type="submit" name="btn_enviar" value="Enviar">
              </form>
            </div>
          </div>
        </div>
      </section>
      <?php
        if(isset($_POST['btn_confirmar'])){
          $documento = $_POST['documento'];
          $tipoDocumento = $_POST['tipoDocumento'];
          $primerNombre = $_POST['primerNombre'];
          $segundoNombre = $_POST['segundoNombre'];
          $primerApellido = $_POST['primerApellido'];
          $segundoApellido = $_POST['segundoApellido'];
          $sexo = $_POST['sexo'];
          $fechaNacimiento = $_POST['fechaNacimiento'];
          $telefono = $_POST['telefono'];
          $direccion = $_POST['direccion'];
          $foto = $_POST['foto'];
  
          $insertar = "INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto, Estado) VALUES ($documento, '$tipoDocumento', '$primerNombre', '$segundoNombre','$primerApellido', '$segundoApellido', '$sexo', '$fechaNacimiento', '$telefono', '$direccion', '$foto', 'claro');";
          mysqli_query($conexion, $insertar);
        }
      ?>
    <?php } elseif($_POST['rol'] == "Administrador"){?>
      <section class="modulos">
      <div class="text">
          <div class="rolUsuarios">
            <div class="administrador">
              <div class="titulo">
                Administrador
              </div>
              <form action="../php/registroAdministrador.php" method="post" class="ui form">
                <div class="field">
                  <label for="">Cargo</label>
                  <input type="text" name="Cargo" id="">
                </div>
                <div class="three fields">
                  <div class="field">
                    <label for="">Documento</label>
                    <?php echo "<input type='text' name='documento' value=".$_POST['documento']." id='' readonly>"; ?>
                  </div>
                  <div class="field">
                    <label for="">Correo</label>
                    <input type="text" name="CorreoAdministrador">
                  </div>
                  <div class="field">
                    <label for="">Clave</label>
                    <input type="text" name="ClaveAdministrador">
                  </div>
                </div>
                <input type="submit" name="btn_enviar" value="Enviar">
              </form>
            </div>
          </div>
        </div>
      </section>
      <?php 
        if($_POST['rol'] == "Administrador"){
          $documento = $_POST['documento'];
          $tipoDocumento = $_POST['tipoDocumento'];
          $primerNombre = $_POST['primerNombre'];
          $segundoNombre = $_POST['segundoNombre'];
          $primerApellido = $_POST['primerApellido'];
          $segundoApellido = $_POST['segundoApellido'];
          $sexo = $_POST['sexo'];
          $fechaNacimiento = $_POST['fechaNacimiento'];
          $telefono = $_POST['telefono'];
          $direccion = $_POST['direccion'];
          $foto = $_POST['foto'];
  
          $insertar = "INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto, Estado) VALUES ($documento, '$tipoDocumento', '$primerNombre', '$segundoNombre','$primerApellido', '$segundoApellido', '$sexo', '$fechaNacimiento', '$telefono', '$direccion', '$foto', 'claro');";
          mysqli_query($conexion, $insertar);
        }
      ?>
    <?php }?>
  <script src="../js/sidebarNote.js"></script>
</body>

</html>