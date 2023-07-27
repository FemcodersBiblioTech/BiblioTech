<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech</title>
</head>

<body>
    <?php
    
        foreach($books as $book){
            echo '<ul>';
            echo '<li>'. $book['title'] .'</li>';
            echo '<li>'. $book['author'] .'</li>';
            echo '</ul>';
        }
        ?>
</body>

</html>