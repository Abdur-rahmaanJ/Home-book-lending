<!DOCTYPE html>
<html>
<head>
	<script src="libs/jquery.js"></script>
	<title>
		Home Book Lending - Control Panel	
	</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<script>
		$(function(){
			$("#nav").load("header.html");
		});
	</script>
	
</head>
<body>
<div id='nav'></div>

<?php
include("conn.php");
include("auth.php");
//error_reporting(0);
$user = $_SESSION['username'];
$num = 1;

$sql2 = "SELECT id, name, isbn, friend,owner,date FROM books";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row
	echo "<table style='width:70%;border-collapse: collapse;margin-left:15%;'>";
	echo "<tr><th> No. </th><th> Book Name </th><th> ISBN </th><th> Borrower </th><th> Date </th></tr>";
    while($row = $result->fetch_assoc()) {
		if ($row["owner"] == $user) {
			echo "<tr>" ."<th>". $num ."</th>"."<th>". $row["name"] . "</th> ". "<th>" . $row["isbn"] . "</th>" . "<th>" . $row["friend"] . "</th>" . "<th>" . $row["date"] . "</th></tr>";
			$num = $num + 1;
		}
	}
	echo "</table>";
} else {
    echo "<span class='column'>Nothing yet here!</span>";
}
$conn->close();

?>

</div>
</body>
</html>
