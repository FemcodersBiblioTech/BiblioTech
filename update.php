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
$url = $_POST['URL'];
if (!empty($image) && !empty($url)) {
          $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql = "UPDATE books SET isbn = '$isbn', image = '$image', title = '$title', author ='$author', year = '$year', description = '$description', URL = '$url' WHERE isbn = '$isbn'";
}
elseif (!empty($_FILES['image']['tmp_name'])) {
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql = "UPDATE books SET isbn = '$isbn', image = '$image', title = '$title', author ='$author', year = '$year', description = '$description' WHERE isbn = '$isbn'";
}
elseif (!empty($url)) {
    $sql = "UPDATE books SET isbn = '$isbn', title = '$title', author ='$author', year = '$year', description = '$description', URL = '$url' WHERE isbn = '$isbn'";
}
else{
      $sql = "UPDATE books SET isbn = '$isbn', title = '$title', author ='$author', year = '$year', description = '$description' WHERE isbn = '$isbn'";

}
if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>