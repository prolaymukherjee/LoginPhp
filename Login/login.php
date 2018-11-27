<?php 
 
$host="localhost";
$user="root";
$password="";
$db="demo";
 
mysql_connect($host,$user,$password);
mysql_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>



<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Transparent Login Form</title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Log In Here</h2>
			<form>
				<p>Email</p>
				<input type="text" name="" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="" placeholder="••••••">
				<input type="submit" name="" value="Sign In">
				<a href="#">Forget Password</a>
			</form>
		</div>
	</body>
</html>
