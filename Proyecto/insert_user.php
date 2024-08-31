<?php
include("connection.php");
$con = connection();

$Bookname = $_POST['Bookname'];
$Autor = $_POST['Autor'];
$ISBN = $_POST['ISBN'];
$Description = $_POST['Description'];


$sql = "INSERT INTO users VALUES('$Bookname','$Autor','$ISBN','$Description')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>