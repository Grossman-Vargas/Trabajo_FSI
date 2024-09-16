<?php
include("connection.php");
$con = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Bookname = $_POST['Bookname'];
    $Autor = $_POST['Autor'];
    $ISBN = $_POST['ISBN'];
    $Description = $_POST['Description'];

    $sql = "INSERT INTO books (Bookname, Autor, ISBN, Description) VALUES ('$Bookname', '$Autor', '$ISBN', '$Description')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: gestion_libro.php");
    } else {
        echo "Error al agregar el libro.";
    }
}
?>
