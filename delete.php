<?php

    $isbn = $_GET['isbn'];

    include('Model/Connection.php');
    $con = new Connection();

    $deleted = $con->deleteBookByISBN($isbn);

    header('Location: index.php');
        
?>