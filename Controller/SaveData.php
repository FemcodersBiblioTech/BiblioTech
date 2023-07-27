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
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
/*$url = $_POST['URL'];*/

$sql = "INSERT INTO books (title, image, author, description, year, isbn) VALUES ('$title','$image','$author', '$description', '$year', '$isbn')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>