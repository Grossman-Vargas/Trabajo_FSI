<?php
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM books WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Bookname = $_POST['Bookname'];
    $Autor = $_POST['Autor'];
    $ISBN = $_POST['ISBN'];
    $Description = $_POST['Description'];

    $update_sql = "UPDATE books SET Bookname='$Bookname', Autor='$Autor', ISBN='$ISBN', Description='$Description' WHERE id='$id'";
    $update_query = mysqli_query($con, $update_sql);

    if ($update_query) {
        header("Location: gestion_libro.php");
    } else {
        echo "Error al actualizar el libro.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Editar Libro</h1>

        <form action="" method="POST">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="Bookname" class="form-control" value="<?= $row['Bookname'] ?>" required>
                </div>
                <div class="col">
                    <input type="text" name="Autor" class="form-control" value="<?= $row['Autor'] ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="ISBN" class="form-control" value="<?= $row['ISBN'] ?>" required>
                </div>
                <div class="col">
                    <input type="text" name="Description" class="form-control" value="<?= $row['Description'] ?>" required>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Actualizar Libro">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
