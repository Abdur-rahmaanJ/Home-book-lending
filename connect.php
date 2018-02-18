<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php

$servername = "localhost";
$username = $_POST["name"];
$password = $_POST["pass"];;
$dbname = "books_lending";
$table = "books";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else
{
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    echo "logged in <a href='view.php'>view db</a>";
}

/*
$sql = "INSERT INTO $table (id, name, isbn, friend)
VALUES (null, 'TheRiver', 'rtbtrhtb', 'v')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/

?>
</body>
</html>

