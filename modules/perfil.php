<?php 
  include_once("../bd/conexion.php");
  $perfiladmin = "SELECT * FROM perfiladmin";
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
  <?php $consultaperfil=mysqli_query($conexion, $perfiladmin); 
          
  while($row = mysqli_fetch_assoc($consultaperfil)){
    if($row["Documento"] == 1000341758){ ?>
  <section class="modulos">
    <div class="text">
      <div class="perfil">
        <div class="imagen-perfil">
          <?php echo '<img class="ui medium circular image" src="'.$row["Foto"].'">'; ?>
        </div>
        <div class="info-perfil">
          <div class="titulo">
            Informacion Estudiante
          </div>
          <form action="" method="post" class="ui form">
            <div class="three fields">
              <div class="field">
                <label for="">Documento</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["Documento"].'">'; ?>
              </div>
              <div class="field">
                <label for="">Primer nombre</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["PrimerNombre"].'">'; ?>
              </div>
              <div class="field">
                <label for="">Segundo nombre</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["SegundoNombre"].'">'; ?>
              </div>
            </div>

            <div class="two fields">
              <div class="field">
                <label for="">Primer apellido</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["PrimerApellido"].'">'; ?>
              </div>
              <div class="field">
                <label for="">Segundo apellido</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["SegundoApellido"].'">'; ?>
              </div>
            </div>
            <?php ?>
            <div class="three fields">
              <div class="field">
                <label for="">Fecha nacimiento</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["FechaNacimiento"].'">'; ?>
              </div>
              <div class="field">
                <label for="">Direccion</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["Direccion"].'">'; ?>
              </div>
              <div class="field">
                <label for="">Telefono</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["Telefono"].'">'; ?>
              </div>
            </div>
            <div class="two fields">
              <div class="field">
                <label for="">Correo</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["CorreoAdministrador"].'">'; ?>
              </div>
              <div class="field">
                <label for="">Clave</label>
                <?php echo '<input type="text" name="" id="" value="'.$row["ClaveAdministrador"].'">'; ?>
              </div>
            </div>
            <div class="field">
              <label for="">Cargo</label>
              <?php echo '<input type="text" name="" id="" value="'.$row["Cargo"].'">'; ?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php 
    }
  }?>

  
  <script src="../js/sidebarNote.js"></script>
</body>
</html>