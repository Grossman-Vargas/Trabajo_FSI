<?php
include("connection.php");
$con = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escapar las entradas para prevenir SQL injection
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    // Insertar usuario en la base de datos sin encriptar la contraseña
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error al registrar el usuario";
    }
}
?>
