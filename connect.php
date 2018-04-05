<?php
	include("conn.php");

	if (isset($_POST["Login"])) {

		$username = $_POST["name"];
		$password = $_POST["pass"];
		$username = test_input($username);
		$password = test_input($password);
		$status = "yes";
		// Create connection

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} else {
			$query = mysqli_query($conn ,"SELECT * FROM user WHERE username = '$username' AND  password = '$password' ");
			$rows = mysqli_num_rows($query);
			
			if($rows == 1) {
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['logined'] = $status;
				header("Location:view.php");
			}
			//echo "<span class='logged'>You're logged in &raquo; <a href='view.php'>See Database</a></span>";
		}
	}
	
	if (isset($_POST["Register"])) {
		header("Location:register.php");
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

