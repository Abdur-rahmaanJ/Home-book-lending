<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
</head>
<body>
    <?php
if(isset($_POST['update']))
{
    
    session_start();
    $name = $_POST['name'];
    $friend = $_POST['friend'];
    $isbn = $_POST['isbn'];
    
    $servername = "localhost";
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $dbname = "books_lending";
    $table = "books";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO $table (id, name, isbn, friend)
    VALUES (null, '$name', '$isbn', '$friend')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <a href='view.php'>return to table</a><br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

}else
{
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