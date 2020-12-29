<?php
session_start();  
?>

<!DOCTYPE>
<html>
<head>
	<title>JUST MILES</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style type="text/css">
    	.body1{
	background:url('images/rotate1.gif') no-repeat;
	background-size: cover;
	font-family: Arial;
	color:white;
}

#ul{
	margin: 0px;
	padding: 0px;
	list-style: none;
}
ul li{
	float:left;
	width: 260px;
	height: 40px;
	background-color: #FF0000;
	opacity: 0.8;
	line-height: 40px;
	text-align: center;
	font-size: 20px;
	margin-right: 4px;
	border-radius: 10px;
	border: 2px solid #00DEFF;

}
ul li a{
	text-decoration: none;
	color: white;
	display: block;
}
ul li a:hover{
	background-color: black;
}
ul li ul li{
	display: none;
}
ul li:hover ul li{
	display: block;
}
    </style>
</head>
<body class="body1">
	<ul id="ul">
		<li><a href="">HOME</a></li>
		<li><a>CARS</a>
			<ul id="ul">
				<li><a href="suv.php">SUV CARS</a></li>
				<li><a href="sedan.php">SEDAN CARS</a></li>
			</ul>
		</li>
		<li><a>BIKES</a>
			<ul id="ul">
				<li><a href="sportbikes.php">SPORT BIKES</a></li>
				<li><a href="scooter.php">SCOOTERS</a></li>
			</ul>
		</li>
		<li><a href="feedback.php">FEEDBACK</a>
			<ul id="ul">
				<li><a href="retrieve.php">UPCOMING</a></li>
			</ul>
		</li>
		<li><a href="signin.php">LOGOUT</a>

		</li>
	</ul><br><br>
	
	
</body>
</html>
