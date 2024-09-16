<?php
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "DELETE FROM books WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: gestion_libro.php");
} else {
    echo "Error al eliminar el libro.";
}
?>
