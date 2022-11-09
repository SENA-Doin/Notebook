<?php 
    include_once ("../bd/conexion.php");

    if(isset($_POST['btn_enviar'])){
      $documento = $_POST['documento'];
      $jornada = $_POST['jornadaDocente'];
      $Especializacion = $_POST['Especializacion'];
      $CorreoDocente = $_POST['CorreoDocente'];
      $ClaveDocente = $_POST['ClaveDocente'];

      $insertar2 = "INSERT INTO DOCENTE(JornadaDocente, Especializacion, CorreoDocente, ClaveDocente, IdUsuDocente) VALUES ('$jornada','$Especializacion', '$CorreoDocente', '$ClaveDocente', $documento);";
      mysqli_query($conexion, $insertar2);
    }
    echo "<a href='../modules/inicio.html'>Volver</a>";
  ?>