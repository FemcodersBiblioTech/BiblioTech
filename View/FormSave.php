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
        <input type='text' name='title' placeholder='Title...' value='' />
        <input type='file' name='image' />

        <input type='submit' name='Guardar' />

    </form>
</body>

</html>