<?php
  require 'css/dbconfig/config.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title> Feedback Form</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<style type="text/css">
	body{
		background-repeat: no-repeat;
		background-size: cover;
		margin-bottom: 200px;
	}
</style>
<body style="background-color: #7f8c8d" background="images/feedback.gif">
	<div id="main-wrapper">
		<center><h2>Feedback Form</h2>
		<img src="images/login.png" class="avatar"/>
	</center>

	<form class ="myform" action="feedback.php" method="post">
		<label><b>Username</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username" required /><br><br>
		<label><b>Email</b></label><br>
		<input name="email" type="text" class="inputvalues" placeholder="Type your email" required /><br><br>
		<label><b>Message</b></label><br>
		<textarea name="message" class="inputvalues" placeholder="Type your message" rows="4" required></textarea><br><br>
		<input name="send" type="submit" id="signup_btn" value="Send Message" /><br><br>
		
		
	</form>
	<?php
	if (isset($_POST['send'])) 
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		if ($username=='' OR $email=='' OR $message=='')
	  {
	  	echo'<script type="text/javascript">alert("Insert All Data")</script>';
 	 	exit();
 	 }
 	 else{
 	 	$query="insert into feedback values('','$username','$email','$message')";
 	 	$query_run=mysqli_query($con,$query);
 	 }
 	 if ($query_run) 
 	 {
 	 	echo'<script type="text/javascript"> alert("Thanks For Your Feedback")</script>';
 	 	echo"<script>window.location.replace('home.php')</script>";
 	 }
 	 else{
 	 	echo'<script type="text/javascript"> alert("Unsccessful")</script>';
 	 }
 	}
	?>
	</div>

</body>
</html>

