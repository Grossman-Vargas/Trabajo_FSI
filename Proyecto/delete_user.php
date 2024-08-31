<?php

include("connection.php");
$con = connection();

$Bookname=$_GET['Bookname'];

$sql="DELETE FROM users WHERE Bookname='$Bookname'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>