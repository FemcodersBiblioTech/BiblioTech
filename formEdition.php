<?php

include('Model/Connection.php');
$con = new Connection();

$isbn = $_GET['isbn'];
$sql = "SELECT * FROM books WHERE isbn = '$isbn'";
$query = mysqli_query($con, $sql);
$book = mysqli_fetch_array($query);
/*$book = $con->getBookByISBN($isbn);*/

echo $book['title']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech</title>
</head>
<body>

<?php echo $book['title']?>

<form action='Controller/update.php' method='POST' autocomplete= "off" enctype='multipart/form-data'>
        
<a href="index.php">Cancelar</a>

            <label for= 'InputTitle'>Titulo</label>
            <input type= 'text' name= 'title' value= "<?php echo $book['title']?>" required 
                id=" InputTitle">

            <div>
                <label for="InputAuthor">Autor:</label>
                <input name="author" value= "<?php echo $book['author']?>" required type="text" id="InputAuthor">

                <div>

                    <div>
                        <label for="InputYear">Año:</label>
                        <input type="number" name="year" value= "<?php echo $book['year'] ?>" required id="InputYear">
                    </div>
                    <label for="InputISBN">ISBN:</label>
                    <input type="text" name="isbn" value= "<?php echo $book['isbn']?>" required id="InputISBN">

                    <div >
                        <label for="InputDescription">Descripcion:</label>
                        <textarea name="description" value= "<?php echo $book['description']?>" required id="InputDescription"></textarea>

                        <label for="InputImage">Imagen:</label>
                        <input type='file' name='image'value= "<?php echo base64_encode($book['image'])
                        ?>" required id="InputImage"/>
                        <input type='url' name='URL' id="InputURL"/>
                    </div>
                        <input type='submit' name='Guardar' />
    </form>
            
</body>
</html>


        
