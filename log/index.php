<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	
	<body style="background-color:#7f8c8d">
		<div class="main-wrapper">
			<h2 class="h2">Login Form</h2>
			<center><img class="img" src="img/Login.jpg"/></center>
		
		   <form class="myform" action="index.php" method="post">
			  <label><b>Username:</b></label><br>
			  <input type="text" class="inputvalue" placeholder="Enter Your name"/><br>
			
			   <label><b>Password:</b></label><br>
			   <input type="password" class="inputvalue" placeholder="Enter Your password"/><br>
			   
			  <input type="submit" class="login-btn" value="Login"/><br>
			  <a href="register.php"><input type="button" class="reg-btn" value="Register"/></a>
		    </form>
		</div>
	</body>
</html>