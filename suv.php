<!DOCTYPE html>
<html>
<head>
	<title>SUV CARS</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style type="text/css">
		.body2{
	background:url('images/innov.jpg') no-repeat;
	background-size: cover;
}
.body3{
	background:url('images/sedanbac.jpg') no-repeat;
	background-size: cover;
}

#header{
	height: 50px;
	width: 50%;
	color: #e74c3c;
	text-align: center;
	background-color: white;
	font-size: 40px;
	border-radius: 10px;
	border: 2px solid #2c3e50;

}
#headersmall{
	height: 30px;
	width: 20%;
	text-align: center;
	background-color: white;
	font-size: 20px;
	border-radius: 10px;
	border: 2px solid #2c3e50;
}
.img1{
	width: 350px;
	height: 200px;
	border-radius: 10px;
	border: 2px solid #f80000;
	margin: 40px;
}
.img{
	width: 350px;
	height: 200px;
	border-radius: 10px;
	border: 2px solid #f80000;
	margin: 40px;
	margin-left: 200px;
}
#main_btn{
	background-color: #3498db;
	padding: 10px;
	color: white;
	width: 200px;
	text-align: center;
	font-size: : 18px;
	font-weight: bold;
}
	</style>
	<link rel="stylesheet" type="text/css" href="style5.css">
	<style type="text/css">

#ul{
	margin: 0px;
	padding: 0px;
	list-style: none;
}
ul li{
	float:left;
	width: 255px;
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
<body class="body2">
			<ul id="ul">
		<li><a href="home.php">HOME</a></li>
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
		<li><a href="signin.php">LOGOUT</a></li>
	</ul><br><br><br>
<center><div id="header">SUV CARS</div></center><br>
<center><font color="black" id="headersmall">CLICK THE IMAGE TO VIEW IT</font></center><br>
<a href="endeavour.php"><img src="images/endnew.gif" class="img1"></a>
<a href="innova.php"><img src="images/inonew.gif" class="img1"></a>
<a href="duster.php"><img src="images/dusnew.gif" class="img1"><br></a>
<a href="fortuner.php"><img src="images/fornew.gif" class="img"></a>
<a href="mahindra.php"><img src="images/mahindra_suv2.jpg" class="img"></a>
</body>
</html>

