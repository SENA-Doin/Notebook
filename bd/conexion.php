<?php 
    $host="localhost";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="notebook";

    $conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('No se pudo conectar a la base de datos ' . mysqli_connect_error());
?>