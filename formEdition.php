<?php
    $isbn = $_GET['isbn'];
    include('Model/Connection.php');
    $con = new Connection();
    $book = $con->getBookByISBN($isbn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
<?php
require('View/Header.php'); 
?>
    <a  class="delete-button" href="index.php">Cancelar</a>
    <form class="edit-form-container" action='update.php' method='POST' autocomplete="off" enctype='multipart/form-data'>

        
        <label for='InputTitle'>Titulo</label>
        <input type='text' name='title' value="<?php echo $book['title']?>" required id=" InputTitle">
        <div>
            <label for="InputAuthor">Autor:</label>
            <input name="author" value="<?php echo $book['author']?>" required type="text" id="InputAuthor">
        </div>
        <div>
            <label for="InputYear">Año:</label>
            <input type="number" name="year" value="<?php echo $book['year']?>" required id="InputYear">
        </div>
        <div>
            <label for="InputISBN">ISBN:</label>
            <input type="text" name="isbn" value="<?php echo $book['isbn']?>" required id="InputISBN">
        </div>
        <div>
            <label for="InputDescription">Descripcion:</label>
            <textarea name="description" required id="InputDescription"><?php echo $book['description']?></textarea>
        </div>
        <div>
            <label for="InputImage">Cambiar imagen:</label>
            <input type='file' name='image' id="InputImage" />
            <input type='url' name='URL' id="InputURL" />
        </div>
        <input type='submit' name='Guardar' />
    </form>
    <?php
    require('View/Footer.php');
    ?>
</body>

</html>