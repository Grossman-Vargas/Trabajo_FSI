<?php

include("connection.php");
$con = connection();

$Fecha = $_POST['Fecha'];
$Noches = $_POST['Noches'];
$Habitacion = $_POST['Habitacion'];
$Huespedes = $_POST['Huespedes'];
$ID_user = $_POST['ID_user'];

$sql = "INSERT INTO reservas (Fecha, Noches, Habitacion, Huespedes, ID_user) VALUES('$Fecha', '$Noches', '$Habitacion', '$Huespedes', '$ID_user')";
$query = mysqli_query($con, $sql);

if($query) {
    header("Location: reserva_confirmacion.php?ID_user=$ID_user");
    exit();
} else {
    echo "Error: " . mysqli_error($con);
}

?>
