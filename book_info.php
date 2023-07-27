<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="header">
            <img class="logo-image" src="./assets/Logo.svg" />
            <div>
                <form class="container-input" action="" method="GET">
                    <input class="search" type="text" name="query">
                    <input value='Search' class="button" type="submit"></input>
                </form>
            </div>
        </div>
    </header>

    <div class="book-detail-container">
        <?php
if (isset($_GET['isbn'])) {
    $isbn = $_GET['isbn'];

    include('Model/Connection.php');
    $con = new Connection();
    $book = $con->getBookByISBN($isbn);

    if ($book) {
        echo '<img src="data:image/jpg;base64,' . base64_encode($book['image']) . '"/>';
        echo '<h2>' . $book['title'] . '</h2>';
        echo '<p class="book-title"><b>Author:</b> ' . $book['author'] . '</p>';
        echo '<p class="book-title"><b>Año:</b> ' . $book['year'] . '</p>';
        echo '<p class="book-title"><b>ISBN:</b> ' . $book['isbn'] . '</p>';
        echo '<a class="edit-button" href="formEdition.php?isbn=' .  $book['isbn'] .  '"><img src="./assets/EditButton.svg"></a>';
        echo '<a class="delete-button" href="delete.php?isbn=' .  $book['isbn'] .  '"><img src="./assets/DeleteButton.svg"></a>';
        echo '<p class="book-title description"><b>Description:</b></p><p> ' . $book['description'] . '</p>';
        
    } else {
        echo '<p>Book not found.</p>';
    }
} else {
    echo '<p>No book selected. Please go back and select a book.</p>';
}
?>
    </div>
</body>

</html>