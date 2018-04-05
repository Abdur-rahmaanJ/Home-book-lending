<?php
	include("regis_Check.php")
?>

<html>
	<head>
	<title>
		Home Book Lending -  Register User	
	</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<span class='title'>Register</span>
		<div class="global-wrapper">
			<form action="" method="post" class="login card-panel">
				<div class="form-group">
					<label for="name" class="sr-only">Username</label>
					<input type="text" name="regis_name" placeholder="Username"  />
				</div>
				
				<div class="form-group">
					<label for="name" class="sr-only">Username</label>
					<input type="password" name="regis_password" placeholder="password"  />
				</div>
			
				<div class="form-group">
					<input type="submit" name="Cancel" value="Cancel" />
					<input type="submit" name="Register" value="Register" />
				</div>
			</form>    
		</div>
	</body>
</html>