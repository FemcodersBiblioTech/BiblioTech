<?php
        $isbn = $_POST['isbn'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];
        $description = $_POST['description'];

        include('Model/Connection.php');
        $con = new Connection();

        $updated = $con->updateBookByISBN($isbn, $title, $author, $year, $description);

        if ($updated) {
            header('Location: index.php');
            exit;
        } else {
            echo '<p>Failed to update the book information.</p>';
        }

?>