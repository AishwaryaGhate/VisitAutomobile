<?php
$con = mysqli_connect("localhost","root","","carusers");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>User Feedback</title>

	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style5.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

</style>
<body>
	<body class="body2">

<ul>
	
<h3><b><font color="white"><center><div>WELCOME ADMIN</div></center></b></h3><br>	
<h3><b><font color="white"><center><div>USER FEEDBACKS</div></center></b></h3><br>
	
<a href="adminlogin.php"><center><input type="button" name="logout" value="LOGOUT"></center></a>

<?php

	global $con;
	if (!isset($_GET['email'])) {
		if (!isset($_GET['message'])) {

			$get_feedback = "select * from feedback order by rand() LIMIT 0,6";

			$run_feedback = mysqli_query($con,$get_feedback);

			while ($row_feedback = mysqli_fetch_array($run_feedback)) {
				
				$user_name = $row_feedback['username'];
				$user_email = $row_feedback['email'];
				$user_message = $row_feedback['message'];

				echo "
				<div id='single_product'>
				<font color='red'><h3>USER NAME</font>: $user_name</h3>
				<font color='red'><h3>USER EMAIL</font>: $user_email</h3>
				<font color='red'><p><b>FEEDBACK</font>: $user_message</b></p><br>
				";

			}
		}
	}

 ?>
</ul>
</font>
</head>
</html>