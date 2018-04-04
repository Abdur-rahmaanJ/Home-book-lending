<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "books_lending";

	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

	function test_input ($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>