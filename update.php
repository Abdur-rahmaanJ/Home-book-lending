<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
</head>
<body>
    <?php
<<<<<<< HEAD
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
    if ($sql->execute()) {
        $sql->execute();
        echo "New record created successfully <a href='view.php'>return to table</a><br>";
    } else {
        echo "Error: " . $mysqli->error;
    }
    
    // Close the connection.
    $sql->close();
    
=======
    
        if(isset($_POST['update'])) {

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
>>>>>>> 9209626b889df7e4dcb045c80663cc6d277e45c2

            // Prepare query.
            $sql = $mysqli->prepare("INSERT INTO $table (name, isbn, friend) VALUES (?, ?, ?)");

            // Bind parameters.
            $sql->bind_param('sis', $name, $isbn, $friend);

            // If SQL query works fine, execute it, otherwise... show me the error.
            if ($sql->execute()) {
                $sql->execute();
                echo "New record created successfully <a href='view.php'>return to table</a><br>";
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
        name: <input type="text" name="name"><br>
        friend: <input type="text" name="friend"><br>
        isbn: <input type="text" name="isbn"><br>
        <input type="submit" name="update" value="update">
    </form>
    
</body>
</html>
