<?php
    require_once("conexion.php");
    session_start();

    $modoDark = mysqli_query($conexion, "SELECT Documento, Estado FROM usuario");

    if(isset($_POST['btnDark'])){
        $modo = $_POST['modo'];

        while($row = mysqli_fetch_array($modoDark)){
            if($_SESSION['IdUsuAdmi'] == $row['Documento'] or $_SESSION['idUsuDoc'] == $row['Documento'] 
                or $_SESSION['IdUsuEstu'] == $row['Documento']){
                    if($row['Estado'] == $modo){

                        $modificarEstado = mysqli_query($conexion, 
                            "UPDATE usuario SET Estado = 'dark'");

                        $modoactual = "claro";
                        header('location:dashboard.php?mod=configuracion');

                    }else if($row['Estado'] != $modo){
                        $modoactual = "dark";
                        $modificarEstado = mysqli_query($conexion, 
                            "UPDATE usuario SET Estado = 'claro'");
                        header('location:dashboard.php?mod=configuracion');
                        
                    }else{
                        echo "Hubo un error al tratar de cambiar el color";
                    }
                }
        }

    }
?>