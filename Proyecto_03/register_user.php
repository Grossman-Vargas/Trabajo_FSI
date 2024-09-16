<?php
include("connection.php");
$con = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);


    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error al registrar el usuario";
    }
}
?>
