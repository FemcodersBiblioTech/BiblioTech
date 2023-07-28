<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">

</head>

<body>
    <?php
require('View/Header.php'); ?>
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
        echo '<div class= "card-container">';
        echo '<h3 class="card-title" >' . $row['title'] . '</h3>';
    echo '<p class="card-subtitle" >' . $row['author'] . '</p>';
    echo '<a href="book_info.php?isbn=' . urlencode($row['isbn']) . '">';
    
    if (!empty($row['image'])) {
        echo '<img class="card-image" src="data:image/jpg;base64,' . base64_encode($row['image']) . '"/>';
    } elseif (!empty($row['url'])) {
        echo '<img src="' . $row['url'] . '"/>';
    } 
    echo '</a>';
    echo '</div>';
    }
} else {
    echo "No hay resultados";
}

$stmt->close();
$conn->close();
?>

</body>

</html>