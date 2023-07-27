<?php

include('Connection.php');

$conn = conectar();

$ISBN = $_POST['ISBN'];
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$description = $_POST['description'];

$sql = "UPDATE Book_Register SET  ISBN = '$ISBN', title = '$title', author ='$author', year = '$year', description = '$description' WHERE ISBN = '$ISBN'";
 $query = mysqli_query($conn, $sql);

 if($query){
    Header("Location: index.php");
 } else {
    echo $query;
 }



?>