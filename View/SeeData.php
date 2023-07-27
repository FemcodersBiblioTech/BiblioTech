<?php
include('Model/Connection.php');
$con = new Connection();
$allBooks = $con->getAllBooks();
foreach ($allBooks as $book) {
    echo '<div>';
    echo '<a href="book_info.php?isbn=' . urlencode($book['isbn']) . '">';
    echo '<p>' . $book['title'] . '</p>';
    echo '<p>' . $book['author'] . '</p>';
    
    if (!empty($book['image'])) {
        echo '<img src="data:image/jpg;base64,' . base64_encode($book['image']) . '"/>';
    } elseif (!empty($book['url'])) {
        echo '<img src="' . $book['url'] . '"/>';
    } 
    echo '</a>';
    echo '</div>';
}
?>