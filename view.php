<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
<a class="update-link" href="update.php">Update Database</a><br>
<?php

session_start();

$servername = "localhost";
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = "books_lending";
$table = "books";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql2 = "SELECT id, name, isbn, friend FROM books";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<span class='column'>" . $row["id"] . " &raquo; " . $row["name"] . " &raquo; " . $row["isbn"] . " &raquo; " . $row["friend"] . "</span><br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</body>
</html>
