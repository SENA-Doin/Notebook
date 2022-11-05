<?php
    $host = "127.0.0.1";
    $port = 3306;
    $socket = "";
    $user = "root";
    $password = "1020105336";//en mi pc si tengo una clave puesta en mi workbench
    $dbname = "notebook";

    $conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
      or die('Could not connect to the database server' . mysqli_connect_error());

    //$con->close();
