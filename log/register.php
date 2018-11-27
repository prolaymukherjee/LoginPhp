
<!DOCTYPE html>
<html>
	<head>
		<title>Registration Page</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	
	<body style="background-color:#95a5a6">
		<div class="main-wrapper">
			<h2 class="h2">Registration Form</h2>
			<center><img class="img" src="img/Login.jpg"/></center>
		
		   <form class="myform" action="register.php" method="post">
			  <label><b>Username:</b></label><br>
			  <input type="text" class="inputvalue" placeholder="Enter Your name"/><br>
			  
			  <label><b>Email:</b></label><br>
			  <input type="text" class="inputvalue" placeholder="Enter Your Email"/><br>
			
			   <label><b>Password:</b></label><br>
			   <input type="password" class="inputvalue" placeholder="Enter Your password"/><br>
			   
			   <label><b>Confirm Password:</b></label><br>
			   <input type="password" class="inputvalue" placeholder="Enter Your Confirm password"/><br>
			   
			  <input type="submit" class="Signup-btn" value="Sign Up"/><br>
			  <a href="index.php"><input type="button" class="back-btn" value="Back"/></a>
		    </form>
		</div>
	</body>
</html>