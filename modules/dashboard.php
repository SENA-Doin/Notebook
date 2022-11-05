<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/semantic.css">
  <link rel="stylesheet" href="../css/ana.css">
  <script src="../js/jquery-3.1.1.min.js"></script>
  <script src="../js/semantic.js"></script>
  <link rel="icon" href="../img/logo_1.2.ico">
  <title>INICIO</title>
</head>

<?php
  require_once("../php/consultas.php");

  while($row = mysqli_fetch_array($modoDark)){
    if($_SESSION['IdUsuAdmi'] == $row['Documento'] or $_SESSION['idUsuDoc'] == $row['Documento'] 
      or $_SESSION['IdUsuEstu'] == $row['Documento']){
        ?>
          <body class="dashboard <?php echo $row['Estado']; ?>">
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
                      <a href="dashboard.php?mod=inicio">
                        <i class="home icon iconos"></i>
                        <span class="text nav-text">Inicio</span>
                      </a>
                    </li>

                    <li class="nav-link">
                      <a href="dashboard.php?mod=calificaciones">
                        <i class="paste icon iconos"></i>
                        <span class="text nav-text">Calificaciones</span>
                      </a>
                    </li>

                    <li class="nav-link">
                      <a href="dashboard.php?mod=materias">
                        <i class="book icon iconos"></i>
                        <span class="text nav-text">Materias</span>
                      </a>
                    </li>

                    <li class="nav-link">
                      <a href="dashboard.php?mod=web">
                        <i class="globe icon iconos"></i>
                        <span class="text nav-text">Web</span>
                      </a>
                    </li>

                    <li class="nav-link">
                      <a href="dashboard.php?mod=correo">
                        <i class="envelope icon iconos"></i>
                        <span class="text nav-text">Correo</span>
                      </a>
                    </li>

                    <li class="nav-link">
                      <a href="dashboard.php?mod=diagramas">
                        <i class="sitemap icon iconos"></i>
                        <span class="text nav-text">Diagramas</span>
                      </a>
                    </li>

                    <li class="nav-link">
                      <a href="dashboard.php?mod=configuracion">
                        <i class="cog icon iconos"></i>
                        <span class="text nav-text">Configuracion</span>
                      </a>
                    </li>

                    <li class="nav-link">
                      <a href="dashboard.php?mod=perfil">
                        <i class="user circle icon iconos"></i>
                        <span class="text nav-text">Perfil</span>
                      </a>
                    </li>

                    <li class="nav-link">
                      <a href="dashboard.php?mod=registrarUsuario">
                        <i class="address card icon iconos"></i>
                        <span class="text nav-text">Registra usuario</span>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="bottom-content">
                  <li class="">
                    <a href="../index.php">
                      <i class="sign out alternate icon iconos"></i>
                      <span class="text nav-text">Salir</span>
                    </a>
                  </li>

                </div>
              </div>
            </nav>

            <section class="modulos">
              <div class="text">
                <?php
                if (@$_GET['mod'] == "") {
                  require_once("inicio.php");
                } else
                  if (@$_GET['mod'] == "inicio") {
                  require_once("inicio.php");
                } else
                  if (@$_GET['mod'] == "calificaciones") {
                  require_once("calificaciones.php");
                } else
                  if (@$_GET['mod'] == "materias") {
                  require_once("materias.php");
                } else
                  if (@$_GET['mod'] == "web") {
                  require_once("web.php");
                } else
                  if (@$_GET['mod'] == "correo") {
                  require_once("correo.php");
                } else
                  if (@$_GET['mod'] == "diagramas") {
                  require_once("diagramas.php");
                } else
                  if (@$_GET['mod'] == "configuracion") {
                  require_once("configuracion.php");
                } else
                  if (@$_GET['mod'] == "perfil") {
                  require_once("perfil.php");
                } else
                  if (@$_GET['mod'] == "registrarUsuario") {
                  require_once("registrarUsuario.php");
                } else
                  if (@$_GET['mod'] == "registrarUsu") {
                  require_once("../php/registrarUsu.php");
                } else
                  if (@$_GET['mod'] == "tipoUsuario") {
                  require_once("../php/tipoUsuario.php");
                } else
                  if (@$_GET['mod'] == "consultas") {
                  require_once("../php/consultas.php");
                } 
                ?>
              </div>
            </section>



            <script src="../js/sidebarNote.js"></script>
            <script src="../js/vistaPreliminar.js"></script>
            <script>
              $('.ui.dropdown').dropdown();
            </script>
          </body>
        <?php
      }
  }
?>


</html>