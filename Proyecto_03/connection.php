<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "proyect_03";

    $connect = mysqli_connect($host, $user, $pass, $bd);

    if (!$connect) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    return $connect;
}

?>
