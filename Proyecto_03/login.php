<?php
include("connection.php");
$con = connection();

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password); 


    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $query = mysqli_query($con, $sql);


    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

     
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        header("Location: gestion_libro.php");
        exit;
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
