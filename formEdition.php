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
    <form class="form" action='update.php' method='POST' autocomplete="off" enctype='multipart/form-data'>
        <div class="end">
            <a href=" index.php">
                <img src="./assets/CloseButton.svg">
            </a>
        </div>

        <label for='InputTitle'>Titulo</label>
        <input type='text' name='title' value="<?php echo $book['title']?>" required id=" InputTitle">
        <label for="InputAuthor">Autor:</label>
        <input name="author" value="<?php echo $book['author']?>" required type="text" id="InputAuthor">

        <label for="InputYear">Año:</label>
        <input type="number" name="year" value="<?php echo $book['year']?>" required id="InputYear">
        <label for="InputISBN">ISBN:</label>
        <input type="text" name="isbn" value="<?php echo $book['isbn']?>" required id="InputISBN">

        <label for="InputDescription">Descripcion:</label>
        <textarea name="description" required id="InputDescription"><?php echo $book['description']?></textarea>

        <label for="InputImage">Cambiar imagen:</label>
        <input type='url' name='URL' id="InputURL" placeholder="URL" />
        <p>o</p>
        <input type='file' name='image' id="InputImage" />
        <div class="fakeInput">Elegir file</div>
        <div class="center"><input type='submit' name='Guardar' value="Guardar" class="submit" /></div>
    </form>
    <?php
    require('View/Footer.php');
    ?>
</body>

</html>