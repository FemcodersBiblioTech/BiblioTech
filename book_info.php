<?php

if (isset($_GET['isbn'])) {
    $isbn = $_GET['isbn'];

    include('Model/Connection.php');
    $con = new Connection();
    $book = $con->getBookByISBN($isbn);

    if ($book) {
        echo '<img src="data:image/jpg;base64,' . base64_encode($book['image']) . '"/>';
        echo '<h2>' . $book['title'] . '</h2>';
        echo '<p>Author: ' . $book['author'] . '</p>';
        echo '<p>Año: ' . $book['year'] . '</p>';
        echo '<p>ISBN: ' . $book['isbn'] . '</p>';
        echo '<p>Description: ' . $book['description'] . '</p>';
        echo '<a href="formEdition.php?isbn=' .  $book['isbn'] .  '">Editar</a>';
        echo '<a href="delete.php?isbn=' .  $book['isbn'] .  '">Borrar</a>';
    } else {
        echo '<p>Book not found.</p>';
    }
} else {
    echo '<p>No book selected. Please go back and select a book.</p>';
}


?>