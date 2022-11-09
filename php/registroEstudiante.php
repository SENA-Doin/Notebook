<?php
    include_once ("../bd/conexion.php");

    if(isset($_POST['btn_enviar'])){
        $documento = $_POST['documento'];
        $correoEstudiante = $_POST['correoEstudiante'];
        $claveEstudiante = $_POST['claveEstudiante'];
        $documentoAcudiente = $_POST['documentoAcudiente'];
        $nombreAcudiente = $_POST['nombreAcudiente'];
        $apellidosAcudiente = $_POST['apellidosAcudiente'];
        $telefonosAcudiente = $_POST['telefonosAcudiente'];
        $CorreoAcudiente = $_POST['CorreoAcudiente'];
        $parentesco = $_POST['parentesco'];

        $insertar3 = "INSERT INTO ACUDIENTE(documentoAcudiente, NombresAcudiente, ApellidosAcudiente, TelefonoAcudiente, CorreoAcudiente, Parentesco) VALUES ($documentoAcudiente, '$nombreAcudiente', '$apellidosAcudiente', '$telefonosAcudiente', '$CorreoAcudiente', '$parentesco')";
        mysqli_query($conexion, $insertar3);

        $insertar2 = "INSERT INTO ESTUDIANTE(CorreoEstudiante, ClaveEstudiante, IdUsuEstudiante, IdGrup, DocuAcudi) VALUES ('$correoEstudiante', '$claveEstudiante', $documento, 2, $documentoAcudiente)";
        mysqli_query($conexion, $insertar2);
    }
    echo "<a href='../modules/inicio.html'>Volver</a>";
?>