<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<style type="text/css">
	body{
		background-repeat: no-repeat;
		background-size: cover;
		margin-bottom: 200px;
	}
</style>
<body style="background-color: #7f8c8d" background="images/back.jpg">
	<div id="main-wrapper">
		<center><h2>Admin Login</h2>
		<img src="images/login.png" class="avatar"/>
	</center>
	<form class ="myform" action="adminlogin.php" method="post">
		<label><b>Admin Username</label><br>
		<input name="username" id="us" type="text" class="inputvalues" placeholder="Type your username" required><br><br>
		<label><b>Password</label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your password" required><br><br>
		<input name="login" type="submit" id="login_btn" value="Login"/><br><br>
		
	</form>
	<?php
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username=='pranay' AND $password=='admin')
		{
			header('location:insert_product.php');
		}
		else
		{
			//invalid
			echo'<script type="text/javascript"> alert("Invalid Admin Credentials")</script>';
		}
	}


	?>
	</div>

</body>
</html>