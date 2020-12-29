<?php
$con = mysqli_connect("localhost","root","","carusers");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>
</head>
<style type="text/css">
	body{
		background-repeat:no-repeat;
		background-size: cover;
	}
	table{
		opacity: 0.8;
		color: white;
	}
</style>
<body background="images/back.jpg">
	<center><font color="white"><h3>WELCOME ADMIN</h3></font></center>
	<form method="post" action="insert_product.php" enctype="multipart/form-data">
		<table width="835" hight="650" align="center" style="margin-top: 100px" border="2" bgcolor="black">
			<tr align="center">
				<td colspan="2"<h1>Insert Automobile:</h1></td>
			</tr>

			<tr >
				<td align="right"><b>Automobile Title:</b></td>
				<td><input type="text" name="product_title" size="40"/></td>
			</tr>


			<tr>
				<td align="right"><b>Automobile Category:</b></td>
				<td>
					<select name="product_cat">
						<option>Select a Category</option>
						<?php
						$get_cats = "select * from categories";
						$run_cats = mysqli_query($con,$get_cats);

						while ($row_cats = mysqli_fetch_array($run_cats)) {
							$cat_id = $row_cats['cat_id'];
							$cat_title = $row_cats['cat_title'];

							echo "<option value='$cat_id'>$cat_title</option>";
							# code...
						}

						?>
					</select>
				</td>
			</tr>
			<tr>
			<td align="right"><b>Automobile Company</b></td>
			<td>
				    <select name="product_company">
					<option>Select Company</option>
						<?php
						$get_company = "select * from company";
						$run_company = mysqli_query($con,$get_company);

						while ($row_company = mysqli_fetch_array($run_company)) {
							$company_id = $row_company['company_id'];
							$company_title = $row_company['company_title'];

							echo "<option value='$company_id'>$company_title</option>";
							# code...
						}

						?>
					</select>
			</td>
		</tr>
		<tr>
			<td align="right"><b>Automobile Image-1</b></td>
			<td><input type="file" name="product_image"/></td>
		</tr>

		<tr>
			<td align="right"><b>Automobile Price</b></td>
			<td><input type="text" name="product_price"/></td>
		</tr>


		<tr>
			<td align="right"><b>Automobile Description</b></td>
			<td><textarea name="product_desc" cols="35" rows="10"></textarea></td>
		</tr>

		<tr align="center">
			<td colspan="2"><input type="submit" name="insert_product" value="INSERT"/></td>
		</tr>
		</table><br>
		<a href="viewfeedback.php"><center><input type="button" name="viewfed" value="VIEW FEEDBACK"></center></a>
</body>
</html>

<?php
if (isset($_POST['insert_product'])) {
	$product_title = $_POST['product_title'];
	$product_cat = $_POST['product_cat'];
	$product_company = $_POST['product_company'];
	$product_price = $_POST['product_price'];
	$product_desc = $_POST['product_desc'];



	$product_image = $_FILES['product_image']['name'];

	$product_image_tmp = $_FILES['product_image']['tmp_name'];

	move_uploaded_file($product_image_tmp, "product_images/$product_image");


		if ($product_title =="" OR $product_cat =="" OR $product_company =="" OR $product_desc =="" ) {

		echo "<script>alert('please insert all fields')</script>";
		exit();
		
	}

	else{
		move_uploaded_file($product_image_tmp, "product_images/$product_image");


		$insert_product = "insert into products(product_cat,product_company,date,product_title,product_img1,product_price,product_desc)values('$product_cat','$product_company',NOW(),'$product_title','$product_image','$product_price','$product_desc')";

		$run_product = mysqli_query($con,$insert_product);

		if ($run_product) {

			echo "<script>alert('product inserted successfully')</script>";
			
		}
	}
	
}




?>













