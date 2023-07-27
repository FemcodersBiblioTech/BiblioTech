<?php
include('Model/Connection.php');
$con = new Connection();
$allBooks = $con->getAllBooks();
$booksPerPage = 6;

if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = intval($_GET['page']);
} else {
    $currentPage = 1;
}
$bookChunks = array_chunk($allBooks, $booksPerPage);
$totalPages = count($bookChunks);

if ($currentPage > $totalPages || $currentPage <= 0) {
    $currentPage = 1;
}

$currentBooks = $bookChunks[$currentPage - 1];
echo '<div class="data-container">';
foreach ($currentBooks as $book) {
   echo '<div class= "card-container">';
    echo '<a href="book_info.php?isbn=' . urlencode($book['isbn']) . '">';
    echo '<p class="card-title" >' . $book['title'] . '</p>';
    echo '<p class="card-subtitle" >' . $book['author'] . '</p>';
    
    if (!empty($book['image'])) {
        echo '<img class="card-image" src="data:image/jpg;base64,' . base64_encode($book['image']) . '"/>';
    } elseif (!empty($book['url'])) {
        echo '<img src="' . $book['url'] . '"/>';
    } 
    echo '</a>';
    echo '</div>';
}
echo '</div>';
echo '<div class="pagination">';
if ($totalPages > 1) {
    if ($currentPage > 1) {
        echo '<a class="prev" href="?page=' . ($currentPage - 1) . '"><img src="./assets/arrow2.svg" ></a>';
        echo '<span class="pages">' . $currentPage . ' - ' . $totalPages . '</span>';
        echo '<img src="./assets/arrow1.svg" >';
    }
    if ($currentPage < $totalPages) {
        echo '<img src="./assets/arrow2.svg">';
        echo '<span class="pages">' . $currentPage . ' - ' . $totalPages . '</span>';
        echo '<a class="next" href="?page=' . ($currentPage + 1) . '"><img src="./assets/arrow1.svg" ></a>';
    }
}
echo '</div>';
?>