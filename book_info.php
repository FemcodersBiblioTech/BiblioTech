<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Book details</title>
</head>

<body>
    <?php
require('View/Header.php'); ?>

    <div class="book-detail-container">
        <?php
    $isbn = $_GET['isbn'];

    include('Model/Connection.php');
    $con = new Connection();
    $book = $con->getBookByISBN($isbn);
if (!empty($book['image'])) {
        echo '<img class="card-image" src="data:image/jpg;base64,' . base64_encode($book['image']) . '"/>';
    } elseif (!empty($book['url'])) {
        echo '<img src="' . $book['url'] . '"/>';
    }         echo '<h2>' . $book['title'] . '</h2>';
        echo '<p class="book-title"><b>Author:</b> ' . $book['author'] . '</p>';
        echo '<p class="book-title"><b>Año:</b> ' . $book['year'] . '</p>';
        echo '<p class="book-title"><b>ISBN:</b> ' . $book['isbn'] . '</p>';
        echo '<a class="edit-button" href="formEdition.php?isbn=' .  $book['isbn'] .  '"><img src="./assets/EditButton.svg"></a>';
        echo '<a class="delete-button" href="delete.php?isbn=' .  $book['isbn'] .  '"><img src="./assets/DeleteButton.svg"></a>';
        echo '<p class="book-title description"><b>Description:</b></p><p> ' . $book['description'] . '</p>';
        
?>
    </div>
</body>

</html>