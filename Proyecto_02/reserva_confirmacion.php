<?php
include("connection.php");
$con = connection();

$ID_user = $_GET['ID_user'];


$sql_user = "SELECT * FROM users WHERE ID = '$ID_user'";
$query_user = mysqli_query($con, $sql_user);


if (!$query_user) {
    die("Error en la consulta de usuario: " . mysqli_error($con));
}

$user = mysqli_fetch_assoc($query_user);

if (!$user) {
    die("No se encontró el usuario con ID: $ID_user");
}


$sql_reserva = "SELECT * FROM reservas WHERE ID_user = '$ID_user'";
$query_reserva = mysqli_query($con, $sql_reserva);


if (!$query_reserva) {
    die("Error en la consulta de reservas: " . mysqli_error($con));
}

$reservas = mysqli_fetch_all($query_reserva, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_02.css" rel="stylesheet">
    <title>Detalles de la Reserva</title>

</head>

<body>
    <div class="confirmation">
        <h2>Detalles de la Reserva</h2>
        <h3>Información del Usuario</h3>

        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($user['Nombre']); ?></p>
        <p><strong>Apellido:</strong> <?php echo htmlspecialchars($user['Apellido']); ?></p>

        <p><strong>DNI:</strong> <?php echo htmlspecialchars($user['DNI']); ?></p>
        <p><strong>Celular:</strong> <?php echo htmlspecialchars($user['Celular']); ?></p>

        <h3>Detalles de la Reserva</h3>
        <?php if (count($reservas) > 0): ?>
            <table>
                <thead>
                    <tr>

                        <th>Fecha</th>
                        <th>Noches</th>
                        <th>Habitación</th>
                        <th>Huéspedes</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservas as $reserva): ?>
                        <tr>

                            <td><?php echo htmlspecialchars($reserva['Fecha']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['Noches']); ?></td>

                            <td><?php echo htmlspecialchars($reserva['Habitacion']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['Huespedes']); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay reservas para este usuario.</p>
        <?php endif; ?>
    </div>
</body>

</html>
