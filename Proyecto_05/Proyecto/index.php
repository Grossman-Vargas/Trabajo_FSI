<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>USERS</title>
</head>

<body>
    <div class="users-form">
        <h2>Agregar Usuario</h2>
        <form action="insert_user.php" method="POST">
            
            <input type="text" name="Nombre" placeholder="Nombre" required>
            <input type="text" name="Apellido" placeholder="Apellido" required>
            <br>
            </br>   
            <input type="text" name="DNI" placeholder="DNI" required>
            <input type="text" name="Celular" placeholder="Celular" required>
            <br>
            </br>   
            <input type="submit" value="Agregar">


        </form>
    </div>
</body>

</html>
