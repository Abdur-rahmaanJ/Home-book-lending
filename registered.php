<?php
	session_start();
	if (!isset($_SESSION["registered"])) {
		header("Location:index.php");
		exit();
	}
	session_destroy();
?>

<html>
	<head>
		<title>
			Home Book Lending -  Registered	
		</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<span class='title'>Registered</span><br>
		<a href='index.php' class="record-created">Return To Homepage</a>
	</body>
<html>