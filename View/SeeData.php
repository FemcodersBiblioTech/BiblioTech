<?php
include('Model/Connection.php');
$con = new Connection();
$allBooks = $con->getAllBooks();
foreach ($allBooks as $book) {
    echo '<ul>';
    echo '<li>' . $book['title'] . '</li>';
    echo '<li>' . $book['author'] . '</li>';
    echo '<a href="book_info.php?isbn=' . urlencode($book['isbn']) . '">';
    echo '<img src="data:image/jpg;base64,' . base64_encode($book['image']) . '"/>';
    echo '</a>';
    echo '</ul>';
}
?>