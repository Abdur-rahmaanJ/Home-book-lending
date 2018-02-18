<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
    <?php
        if(isset($_POST['update']))
        {
            
            session_start();
            
            // Database connection data.
            $servername = "localhost";
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            $dbname = "books_lending";
            $table = "books";

            // Connect to mysqli.
            $mysqli = new mysqli($servername, $username, $password, $dbname);

            // Check connection.
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            // Grab data from the form. 
            $name = $_POST['name'];
            $isbn = $_POST['isbn'];
            $friend = $_POST['friend'];

            // Prepare query.
            $sql = $mysqli->prepare("INSERT INTO $table (name, isbn, friend) VALUES (?, ?, ?)");
            
            // Bind parameters.
            $sql->bind_param('sis', $name, $isbn, $friend);
            
            // If SQL query works fine, execute it, otherwise... show me the error.
            
            if($sql) {
                $sql->execute();
                echo "<span class='record-created'>New record created successfully &raquo; <a href='view.php'>Return to Table</a></span>";
            } else {
                echo "Error: " . $mysqli->error;
            }
            
            // Close the connection.
            $sql->close();

                } else {
                    //echo "ddd";
                }

            ?>
            
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="login card-panel">
                <div class="form-group">
                    <label for="name" class="sr-only">Your Name</label>
                    <input type="text" name="name" placeholder="Your Name" />
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
