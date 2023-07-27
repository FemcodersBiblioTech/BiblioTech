<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action='Controller/SaveData.php' method='POST' enctype='multipart/form-data'>
        <div>
            <label for="InputTitle">Titulo</label>
            <input type="text" name="title" required id=" InputTitle">

            <div>
                <label for="InputAuthor">Autor:</label>
                <input name="author" required type="text" id="InputAuthor">

                <div>

                    <div>
                        <label for="InputYear">Año:</label>
                        <input type="number" name="year" required id="InputYear">
                    </div>
                    <label for="InputISBN">ISBN:</label>
                    <input type="text" name="isbn" required id="InputISBN">

                    <div>
                        <label for="InputDescription">Descripcion:</label>
                        <textarea name="description" required id="InputDescription"></textarea>

                        <label for="InputImage">Imagen:</label>
                        <input type='file' name='image' id="InputImage" />
                        <input type='url' name='URL' id="InputURL" />
                    </div>
                    <input type='submit' name='Guardar' />
    </form>
</body>

</html>