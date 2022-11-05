<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ana.css">
  <link rel="stylesheet" href="css/semantic.css">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/semantic.js"></script>
  <link rel="icon" href="img/logo_1.2.ico">
  <title>Iniciar sesion</title>
</head>

<body>
  <div class="contenedor-sesion">
    <div class="login">
      <img class="ui aligned centered small circular image" src="img/logo_1.2.png">
      <p>Notebook Techs</p>
      <form action="php/verificar.php" method="post" class="ui form sesion">
        <label for="">Correo</label>
        <input type="email" name="correo">
        <br><br>
        <label for="">Clave</label>
        <input type="password" name="clave">
        <button type="submit" name="btnIniciar" class="ui inverted button">Iniciar sesion</button>
      </form>
    </div>
    <div class="slider">
      <ul>
        <li>
          <img src="img/fondo1.jpg" alt="">
        </li>
        <li>
          <img src=" img/fondo2.jpg" alt="">
        </li>
        <li>
          <img src="img/fondo1.jpg" alt="">
        </li>
        <li>
          <img src="img/fondo2.jpg" alt="">
        </li>
      </ul>
    </div>
  </div>
</body>

</html>