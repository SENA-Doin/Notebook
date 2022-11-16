<?php 
    include_once("../bd/conexion.php");
    $correos_claves = "SELECT * FROM correos_claves";

    if(isset($_POST['btn_enviar'])){
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $condicional = 0;

        $sql = mysqli_query($conexion, $correos_claves);

        while($row = mysqli_fetch_assoc($sql)){
            if($row['CorreoEstudiante'] == $correo AND $row['ClaveEstudiante'] == $clave OR $row['CorreoDocente'] == $correo AND $row['ClaveDocente'] == $clave OR $row['CorreoAdministrador'] == $correo AND $row['ClaveAdministrador'] == $clave){
                echo "Sesion iniciada<br>";
                echo '<a href="../modules/dashboard.html">Ingresar</a>';
                $condicional = 1;
                break;
            }
        }
        if($condicional == 0){
            echo "Sesion no iniciada<br>";
            echo "Correo o Contraseña Erroneas<br>";
            echo '<a href="../index.html">Volver</a>';  
        }
    }
?>