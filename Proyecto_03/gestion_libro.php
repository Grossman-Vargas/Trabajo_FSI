<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

include("connection.php");
$con = connection();


$sql = "SELECT * FROM books";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Gestión de Libros</h1>

        <form action="insert_libro.php" method="POST" class="mb-5">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="Bookname" class="form-control" placeholder="Nombre del Libro" required>
                </div>
                <div class="col">
                    <input type="text" name="Autor" class="form-control" placeholder="Autor" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="ISBN" class="form-control" placeholder="ISBN" required>
                </div>
                <div class="col">
                    <input type="text" name="Description" class="form-control" placeholder="Descripción" required>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Agregar Libro">
            </div>
        </form>


        <h2 class="text-center">Lista de Libros</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre del Libro</th>
                    <th>Autor</th>
                    <th>ISBN</th>
                    <th>Descripción</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['Bookname'] ?></td>
                        <td><?= $row['Autor'] ?></td>
                        <td><?= $row['ISBN'] ?></td>
                        <td><?= $row['Description'] ?></td>
                        <td><a href="edit_libro.php?id=<?= $row['id'] ?>" class="btn btn-warning">Editar</a></td>
                        <td><a href="eliminar_libro.php?id=<?= $row['id'] ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
