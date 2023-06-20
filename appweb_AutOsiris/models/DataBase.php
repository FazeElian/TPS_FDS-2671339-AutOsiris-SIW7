<?php   
    // Conexión base de datos
    $host = "localhost";
    $root = "root";
    $contrasena = "";
    $bbdd = "autosiris_bbdd";

    $conexion = mysqli_connect($host, $root, $contrasena, $bbdd);

    // Verificamos si está conectada la base de datos
    // if ($conexion){
    //     echo "BBDD Conectada";
    // } else{
    //     echo "Ha ocurrido un error, base de datos no encontrada";
    // }
?>