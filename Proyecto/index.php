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
    <link href="CSS/style.css" rel="stylesheet">
    <title>USERS</title>
</head>

<body>
    <div class="users-form">
        
        <form action="insert_user.php" method="POST">
            <input type="text" name="Bookname" placeholder="Nombre del Libro">
            <input type="text" name="Autor" placeholder="Autor">
            <input type="text" name="ISBN" placeholder="ISBN">
            <input type="text" name="Description" placeholder="Descripcion">


            <input type="submit" value="Agregar">
        </form>
    </div>


    <div class="users-table">
        <h2>Libros Ingresados</h2>

        <table>
            <thead>
                <tr>

                    <th>Nombre del Libro</th>
                    <th>Autor</th>
                    <th>ISBN</th>
                    <th>Descripcion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>

                </tr>
            </thead>

            <tbody>

                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>

                        <th><?= $row['Bookname'] ?></th>
                        <th><?= $row['Autor'] ?></th>
                        <th><?= $row['ISBN'] ?></th>
                        <th><?= $row['Description'] ?></th>

                        <th><a href="update.php?id=<?= $row['Bookname'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['Bookname'] ?>" class="users-table--delete" >Eliminar</a></th>
                    
                    </tr>
                <?php endwhile; ?>
            
            </tbody>
        </table>
    </div>

</body>

</html>


