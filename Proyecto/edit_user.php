<?php

include("connection.php");
$con = connection();

$Bookname=$_POST["Bookname"];
$Autor = $_POST['Autor'];
$ISBN = $_POST['ISBN'];
$Des = $_POST['Description'];


$sql="UPDATE users SET Bookname='$Bookname', Autor='$Autor', ISBN='$ISBN', Description='$Des' WHERE Bookname='$Bookname'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>