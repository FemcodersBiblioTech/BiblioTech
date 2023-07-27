<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$description = $_POST['description'];
$image = '';
$url = '';
    if (!empty($_FILES['image']['tmp_name'])) {
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    } elseif (!empty($_POST['URL'])) {
        $url = $_POST['URL'];
    } else {
    echo '<script type="text/javascript">alert("El campo imagen esta obligatorio!");</script>';
        exit;
    }

$sql = "INSERT INTO books (title, image, author, description, year, isbn, URL) VALUES ('$title','$image','$author', '$description', '$year', '$isbn','$url')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>