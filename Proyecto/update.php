<?php 
    include("connection.php");
    $con=connection();

    $Bookname=$_GET["Bookname"];

    $sql="SELECT * FROM users WHERE Bookname='$Bookname'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="Bookname" value="<?= $row['Bookname']?>">
                <input type="text" name="Autor" placeholder="Autor" value="<?= $row['Autor']?>">
                <input type="text" name="ISBN" placeholder="ISBN" value="<?= $row['ISBN']?>">
                <input type="text" name="Description" placeholder="Descripcion" value="<?= $row['Description']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>