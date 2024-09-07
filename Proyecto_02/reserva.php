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
    <link href="style_02.css" rel="stylesheet">
    <title>RESERVAS</title>
    
</head>

<body>
    <div class="users-form">
        <h2>Crear Reserva</h2>
        <form action="insert_reserva.php" method="POST">
            <div class="form-row full-width">
                <input type="text" name="ID_user" placeholder="ID Usuario" required>
            </div>
            <div class="form-row">

                <input type="date" name="Fecha" placeholder="Fecha" required>
                <input type="text" name="Noches" placeholder="Noches" required>

                <input type="text" name="Habitacion" placeholder="Habitación" required>
                <input type="text" name="Huespedes" placeholder="Huéspedes" required>

            </div>
            <input type="submit" value="Agregar">
            <br>
            </br>
            <a href="index.php">Creación de usuario</a>
        </form>
    </div>
</body>

</html>
