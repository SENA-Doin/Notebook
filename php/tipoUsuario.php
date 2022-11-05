<?php
  require_once("conexion.php");

  if(isset($_POST['btn-registroDocente'])){
    $jornadaD = $_POST['jornadaD'];
    $especializacion = $_POST['especializacion'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $documento = $_POST['documento'];

    $claveEncriptada = md5($clave);

    $insetarTipoUsuario = mysqli_query($conexion, 
        "INSERT INTO `docente` (`idDocente`,`JornadaDocente`, `Especializacion`, `CorreoDocente`, `ClaveDocente`, `IdUsuDocente`) 
        VALUES (NULL,'$jornadaD','$especializacion','$correo','$claveEncriptada','$documento')");
    
    if($insetarTipoUsuario){
      echo "<script>alert('El usuario se ha registrado exitosamente');</script>";
      echo "<script>window. location='dashboard.php?mod=registrarUsuario';</script>";
    }else{
      echo "error en la linea sql";
    }
  }

  if(isset($_POST['btn-registroAdministrador'])){
    $cargo = $_POST['cargo'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $documento = $_POST['documento'];

    $claveEncriptada = md5($clave);

    $insetarTipoUsuario = mysqli_query($conexion, 
        "INSERT INTO `administrador` (`idAdministrador`,`cargo`, `CorreoAdministrador`, `ClaveAdministrador`, `IdUsuAdministrador`) 
        VALUES (NULL,'$cargo', '$correo','$claveEncriptada','$documento')");
    
    if($insetarTipoUsuario){
      echo "<script>alert('El usuario se ha registrado exitosamente');</script>";
      echo "<script>window. location='dashboard.php?mod=registrarUsuario';</script>";
    }else{
      echo "error en la linea sql";
    }
  }

  if(isset($_POST['btn-registroEstudiante'])){
    /*Estuddiante */
    $grado = $_POST['grado'];
    $grupo = $_POST['grupo'];
    $correo = $_POST['correoEstu'];
    $clave = $_POST['clave'];
    $documento = $_POST['documento'];
    $claveEncriptada = md5($clave);

    /*Acudiente */
    $documentoAcu = $_POST['documentoAcu'];
    $nombresAcu = $_POST['nombresAcu'];
    $apellidosAcu = $_POST['apellidosAcu'];
    $telefono = $_POST['telefono'];
    $correoAcu = $_POST['correoAcu'];
    $parentesco = $_POST['parentesco'];

    $grados =  $grado.$grupo;

    switch ($grados) {
      case '101':
        $idGrados = 1;
        break;
      case '102':
        $idGrados = 2;
        break;
      case '103':
        $idGrados = 3;
        break;
      case '111':
        $idGrados = 4;
        break;
      case '112':
        $idGrados = 5;
        break;
      case '113':
        $idGrados = 6;
        break;
      default:
        echo "Error 401";
        break;
    }

    $insetarAcudiente = mysqli_query($conexion, 
        "INSERT INTO `acudiente` (`documentoAcudiente`,`Nombres`, `Apellidos`, `Telefono`, `CorreoAcudiente`, `Parentesco`) 
        VALUES ('$documentoAcu','$nombresAcu','$apellidosAcu','$telefono','$correoAcu','$parentesco')");

    $insetarTipoUsuario = mysqli_query($conexion, 
        "INSERT INTO `estudiante` (`CorreoEstudiante`,`ClaveEstudiante`, `IdUsuEstudiante`, `IdGrup`, `DocuAcudi`)
        VALUES ('$correo','$claveEncriptada','$documento','$idGrados','$documentoAcu')");
    
    if($insetarTipoUsuario){
      echo "<script>alert('El usuario se ha registrado exitosamente');</script>";
      echo "<script>window. location='dashboard.php?mod=registrarUsuario';</script>";
    }else{
      echo "error en la linea sql";
    }
  }
?>