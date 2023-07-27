<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <div class="data-container">
<?php
include('Model/Connection.php');
$con = new Connection();
$allBooks = $con->getAllBooks();
foreach ($allBooks as $book) {
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
?>
</div>
</body>
</html>