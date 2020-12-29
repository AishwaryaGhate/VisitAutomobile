<?php
$con = mysqli_connect("localhost","root","","carusers");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>UPDATES</title>

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
		<li><a href="feedback.php">FEEDBACK</a></li>
		<li><a href="signin.php">LOGOUT</a></li>
	</ul><br><br><br>

<ul>
	
<h3><b><font color="white"><center><div>UPCOMING AUTOMOBILES</div></center></b></h3><br>
<h3><b><center><div>WILL BE MADE AVAILABLE AS SOON AS POSSIBLE</div></center></b></h3>

<?php

	global $con;
	if (!isset($_GET['cat'])) {
		if (!isset($_GET['company'])) {

			$get_products = "select * from products order by rand() LIMIT 0,6";

			$run_products = mysqli_query($con,$get_products);

			while ($row_products = mysqli_fetch_array($run_products)) {

				$pro_id = $row_products['product_id'];
				$pro_title = $row_products['product_title'];
				$pro_cat = $row_products['product_cat'];
				$pro_company = $row_products['product_company'];
				$pro_desc = $row_products['product_desc'];
				$pro_price = $row_products['product_price'];
				$pro_image = $row_products['product_img1'];

				echo "
				<div id='single_product'>
				<h3>$pro_title</h3>
				<h3>$pro_desc</h3>
				<p><b>Price: $pro_price</b></p>

				<img src='product_images/$pro_image' width='180' height='180'/><br>
				<div>
				";
			}
		}
	}

?>

</ul>
</font>
</head>
</html>