<!DOCTYPE html>
<html>
<head>
    <title>
        Home Book Lending - Add Records
    </title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
	<script src="libs/jquery.js"></script>
	<script>
		$(function(){
			$("#header").load("header.html");
		});
	</script>
</head>
<body style="background-color: black; color:white;">
	<div id='header'>
		
	</div>
    <?php
	include("conn.php");
	include("auth.php");
        if(isset($_POST['update'])) {
            

            // Check connection.
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            // Grab data from the form. 
            $name = $_POST['name'];
            $isbn = $_POST['isbn'];
            $friend = $_POST['friend'];
			$owner = $_SESSION['username'];
			
			// make the input secure
			$name = test_input($name);
            $isbn = test_input($isbn);
            $friend = test_input($friend);
			$owner = test_input($owner);
            //echo "---".$name.'-'.$isbn.'-'.$friend ;
            // If fields are not empty.
            if(!empty($name) && !empty($isbn) && !empty($friend) && !empty($owner)) {

                 // Prepare query.
                $sql = $conn->prepare("INSERT INTO books (name, isbn, friend,owner) VALUES (?, ?, ?,?)");
                
                // Bind parameters.
                $sql->bind_param('ssss', $name, $isbn, $friend,$owner); //sss : string string string
                
                // If SQL query works fine, execute it, otherwise... show me the error.
                if($sql) {
                    $sql->execute();
                    echo "
						<span class='record-created'>New record created successfully </span>
						";
                } else {
                    $error = $conn->errno . ' ' . $conn->error;
                    echo $error; 
                }
                
                // Close the connection.
                $sql->close();
            } else {
                echo "<span class='record-created'>All fields are mandatory!</span>";
            }



        } else {
            // 
        }

    ?>
            
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="login card-panel">
                <div class="form-group">
                    <label for="name" class="sr-only">Book Name</label>
                    <input type="text" name="name" placeholder="Book Name" />
                </div>
                <div class="form-group">
                    <label for="name" class="sr-only">Your Friend</label>
                    <input type="text" name="friend" placeholder="Your Friend" />
                </div>
                <div class="form-group">
                    <label for="name" class="sr-only">ISBN</label>
                    <input type="text" name="isbn" placeholder="ISBN" />
                </div>
                <input type="submit" name="update" value="Update">
            </form>
    
</body>
</html>
