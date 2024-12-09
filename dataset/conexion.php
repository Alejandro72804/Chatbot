<?php
function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "chatbot";

    $con = mysqli_connect($host, $user, $pass);

    if (!$con) {
        die("Error al conectar con el servidor: " . mysqli_connect_error());
    }

    if (!mysqli_select_db($con, $bd)) {
        die("Error al seleccionar la base de datos: " . mysqli_error($con));
    }

    //echo "Conexión exitosa a la base de datos";
    return $con;
}

// Llamada a la función para verificar la conexión
conectar();
?>
