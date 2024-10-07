<?php
include("connection.php");
$con = connection();

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$DNI = $_POST['DNI'];
$Celular = $_POST['Celular'];


$sql = "INSERT INTO users (Nombre, Apellido, DNI, Celular) VALUES('$Nombre', '$Apellido', '$DNI', '$Celular')";
$query = mysqli_query($con, $sql);

if($query) {
    echo "Usuario agregado correctamente";
} else {
    echo "Error: " . mysqli_error($con);
}

?>
