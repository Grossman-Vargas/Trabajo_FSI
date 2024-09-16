<?php
include("connection.php");
$con = connection();

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escapar el username para prevenir SQL injection
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password); // También escapamos la contraseña

    // Buscar el usuario en la base de datos
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $query = mysqli_query($con, $sql);

    // Verificar si se encontró el usuario
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        // Iniciar sesión y redirigir a la página de gestión de libros
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        header("Location: gestion_libro.php");
        exit;
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
