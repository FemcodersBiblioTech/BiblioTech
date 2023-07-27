<?php
    $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);


$query = $_GET['query'];
$query = htmlspecialchars($query);

$stmt = $conn->prepare("SELECT * FROM books WHERE (`title` LIKE ?) OR (`author` LIKE ?)");
$searchTerm = "%" . $query . "%";
$stmt->bind_param("ss", $searchTerm, $searchTerm);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><h3>" . $row['title'] . "</h3>" . $row['author'] . "</p>";
    }
} else {
    echo "No results";
}

$stmt->close();
$conn->close();
?>

</body>

</html>