<?php 
	include("connect.php");
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Book Lending - Home</title>
    <!--LIBS-->
    <!-- <link rel="stylesheet" type="text/css" href="./libs/materialize.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="./libs/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <!-- <script type="text/javascript" src="./libs/materialize.min.js"></script> -->
    <!--USER DEFINED-->
    <link rel="stylesheet" type="text/css" href="styles/main.css">

</head>
<body>
    <div class="global-wrapper">
      <form action="" method="post" class="login card-panel">
        <div class="form-group">
          <label for="name" class="sr-only">Username</label>
          <input type="text" name="name" placeholder="Username"  />
        </div>
        <div class="form-group">
          <label for="pass" class="sr-only">Password</label>
          <input type="password" name="pass" placeholder="Password"  />
        </div>
        <div class="form-group">
          <input type="submit" name="Login" value="Login" />
		  <input type="submit" name="Register" value="Register" />
        </div>
      </form>
    </div>

</body>
</html>
