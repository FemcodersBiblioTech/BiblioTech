<?php

include('Connection.php');

$con = conectar();

$isbn = $_GET['isbn'];
$sql = "DELETE FROM books WHERE isbn = '$isbn'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}
?>