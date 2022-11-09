<?php 
    include_once ("../bd/conexion.php");

    if(isset($_POST['btn_enviar'])){
        $documento = $_POST['documento'];
        $Cargo = $_POST['Cargo'];
        $CorreoAdministrador = $_POST['CorreoAdministrador'];
        $ClaveAdministrador = $_POST['ClaveAdministrador'];

        $insertar2 = "INSERT INTO ADMINISTRADOR(Cargo, CorreoAdministrador, ClaveAdministrador, IdUsuAdministrador) VALUES ('$Cargo', '$CorreoAdministrador', '$ClaveAdministrador', $documento)";
        mysqli_query($conexion, $insertar2);
    }
    echo "<a href='../modules/inicio.html'>Volver</a>";
?>