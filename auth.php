<?php
session_start();
	if (!isset($_SESSION["username"]) || !isset($_SESSION["logined"])) {
		header("Location:index.php");
		exit();
	}
?>