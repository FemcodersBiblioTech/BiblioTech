<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

$title = $_POST['title'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$sql = "INSERT INTO books (title, image, author, description, year, isbn) VALUES ('$title','$image','[value-3]','[value-4]','2020','1100200029202')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>