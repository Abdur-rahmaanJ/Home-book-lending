<?php 
	include("conn.php");
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
    }
	
	if (isset($_POST["Register"])) {

		$regis_username = $_POST["regis_name"];
		$regis_password = $_POST["regis_password"];
		$regis_username = test_input($regis_username);
		$regis_password = test_input($regis_password);
		
		if(!empty($regis_username) && !empty($regis_password)) {

                 // Prepare query.
                $sql = $conn->prepare("INSERT INTO user (username, password) VALUES (?,?)");
                
                // Bind parameters.
                $sql->bind_param('ss', $regis_username, $regis_password); //sss : string string string
                
                // If SQL query works fine, execute it, otherwise... show me the error.
                if($sql) {
                    $sql->execute();
					session_start();
					$_SESSION['registered'] = 1;
					header("Location:registered.php");
                    /*echo "
						<span class='record-created'>Registered</span><br>
						<a href='index.php'>Return To Homepage</a>
						";
					*/
                } else {
                    $error = $conn->errno . ' ' . $conn->error;
                    echo $error; 
                }
                
                // Close the connection.
                $sql->close();
            } else {
                echo "<span class='record-created'>All fields are mandatory!</span>";
			}
		
	}
	
	if (isset($_POST["Cancel"])) {
		header("Location:index.php");
	}
?>