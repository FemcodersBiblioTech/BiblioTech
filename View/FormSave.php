<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">

</head>

<body>
    <form action='Controller/SaveData.php' method='POST' enctype='multipart/form-data' class="form">
        <div class="end">
            <a href=" index.php">
                <img src="./assets/CloseButton.svg">
            </a>
        </div>
        <label for="InputTitle">Titulo:</label>
        <input type="text" name="title" required id=" InputTitle">
        <label for="InputAuthor">Autor:</label>
        <input name="author" required type="text" id="InputAuthor">
        <label for="InputYear">Año:</label>
        <input type="number" name="year" required id="InputYear">
        <label for="InputISBN">ISBN:</label>
        <input type="text" name="isbn" required id="InputISBN">
        <label for="InputDescription">Descripcion:</label>
        <textarea name="description" required id="InputDescription"></textarea>
        <label for="InputImage">Imagen:</label>
        <input type='url' name='URL' id="InputURL" placeholder="URL" />
        <p>o</p>
        <input type='file' name='image' id="InputImage" />
        <div class="fakeInput">Elegir file</div>
        <div class="center"><input type='submit' name='Guardar' value="Guardar" class="submit" /></div>
    </form>
</body>

</html>