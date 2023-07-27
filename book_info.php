<?php
if (isset($_GET['isbn'])) {
    $isbn = $_GET['isbn'];

    include('Model/Connection.php');
    $con = new Connection();
    $book = $con->getBookByISBN($isbn);

    if ($book) {
        echo '<h2>' . $book['title'] . '</h2>';
        echo '<p>Author: ' . $book['author'] . '</p>';
        echo '<img src="data:image/jpg;base64,' . base64_encode($book['image']) . '"/>';
        echo '<p>Description: ' . $book['description'] . '</p>';
    } else {
        echo '<p>Book not found.</p>';
    }
} else {
    echo '<p>No book selected. Please go back and select a book.</p>';
}
?>