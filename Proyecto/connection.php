<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "proyect";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}

function connection2() {
    $hosts = "localhost";
    $users = "root";
    $passs = "";

    $bd2 = "users_log";

    $conn=mysqli_connect($hosts, $users, $passs);

    mysqli_select_db($conn, $bd2);

    return $conn;


}


?>


