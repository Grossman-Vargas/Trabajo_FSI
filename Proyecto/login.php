<?php
include("connection.php");
$con = connection2();

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($con, $username);

    $sql = "SELECT * FROM users WHERE username='$username'";

        if (password_verify($password, $row['password'])) {

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            header("Location: index.php");
            
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "Username not found.";
    }

?>
