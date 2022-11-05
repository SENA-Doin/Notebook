<?php
  require_once("conexion.php");

  session_start();

  if(isset($_POST['btnIniciar'])){
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $claveEncriptada = md5($clave);

    $verificarInicio = mysqli_query($conexion, 
      "SELECT cc.CorreoEstudiante, cc.ClaveEstudiante, cc.CorreoDocente, cc.ClaveDocente, 
        cc.CorreoAdministrador, cc.ClaveAdministrador, cc.IdUsuEstudiante, cc.IdUsuDocente, 
        cc.IdUsuAdministrador FROM CORREOS_CLAVES cc
      WHERE CorreoEstudiante OR CorreoDocente OR CorreoAdministrador = '$correo'
      AND ClaveEstudiante OR ClaveDocente OR ClaveAdministrador = '$claveEncriptada'" ) or die ($conexion."Problema en la consulta");

    $resultadoInicio = $verificarInicio->num_rows;
    if($resultadoInicio != 0){
      while($row = mysqli_fetch_array($verificarInicio)){
        $_SESSION['IdUsuAdmi'] = $row['IdUsuAdministrador'];
        $_SESSION['idUsuDoc'] = $row['IdUsuDocente'];
        $_SESSION['IdUsuEstu'] = $row['IdUsuEstudiante'];

        header('location:../modules/dashboard.php');
      }
    }else{
      echo "<script>alert('El usuario o la contraseña son incorrectos');</script>";
      echo "<script>window.location='../index.php';</script>";
    }
  }
?>