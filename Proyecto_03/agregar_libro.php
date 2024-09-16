<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Agregar Libro</h1>
                <form action="insert_libro.php" method="POST">
                    <div class="form-group mb-3">
                        <input type="text" name="Bookname" class="form-control" placeholder="Nombre del Libro" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="Autor" class="form-control" placeholder="Autor" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="ISBN" class="form-control" placeholder="ISBN" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="Description" class="form-control" placeholder="Descripción" required>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Agregar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
