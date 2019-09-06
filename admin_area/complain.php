<!DOCTYPE html>

<?php 

//include("include/include.php");
include("include/include_complain.php");

?>
<html>
<head>
	<title>Complain</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="complain.css">
	<link rel="stylesheet" type="text/css" href="style/AddProduct.css">
	<link rel="stylesheet" type="text/css" href="insert_product.css">
	<!-- <link rel="stylesheet" type="text/css" href="style/insert_product.css"> -->
</head>
<body>
	<!-- main header -->
<!-- <section class="fixed"> -->
<div id="main_header">
	<!-- logo -->
	<div id="logo">
			
		<span id="ist">Sell</span><span id="iist">Zone.com</span>
	</div>
	<!-- search box -->
	<div id="search">
		<form method="get" action="results.php" enctype="multipart/form-data">
			<input class="search_area" type="text" name="user_query" placeholder="Search here">
			<input class="search_btn " type="submit" name="serach" value="Search">
		</form>
	</div>
<!-- </section> -->	
<!-- /main header -->

	
</div>

<!-- navBar -->
<!-- <section class="fixed"> -->
<section>
<div id="navBar">
	<nav>
		<a href="../index.php">Home</a>
		<a href="../allProducts.php">All Products</a>
		
		<!-- <a href="complain.php">Complain box</a>
		<a href="#">Contact info.</a>
		<a href="#">About us</a> -->

		<a href="admin_area/complain.php">Complain box</a>
		<a href="contact/index.php">Contact info.</a>
		<a href="About_us/About_us.php" target="_blank">About us</a>
		
	</nav>
</div>
</section>
<br>
<br>

	 <form action="complain.php" method="post" enctype="multipart/form-data" > 
		
		<!-- <table align="center" width="80%" border="2" bgcolor="#187eae"> -->
		<table align="center"  border="2" class="allformForCompline">
			
			<tr align="center">
				<td colspan="7"><h2>Insert Your complain</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Enter your Name:</b></td>
				<td><input type="text" name="user_name" size="50" required/></td>
			</tr>
			 <tr>
				<td align="right"><b>Enter your Email:</b></td>
				<td ><input type="text" name="user_email" size="50" required/></td>
			</tr>

			<tr align="center">
				<td colspan="7"><h2>Product Details:</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			 <tr>
				<td align="right"><b>Product Category:</b></td>
				<td>
				<select name="product_cat" >
					<option>Select a Category</option>
					<?php 

				 getCat();
					
					?>
				</select>
				
				
				</td>
			</tr>
			 
		
			<tr>
				<td align="right"><b>Product Brand:</b></td>
				<td>
				<select name="product_brand" >
					<option>Select a Brand</option>
					<?php 

				getBrands();	
					?>
				</select>
				
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" /></td>
			</tr>
			
			
			<tr align="center">
				<td colspan="7"><h2>Product Author Details</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Author address:</b></td>
				<td><input type="text" name="author_address" size="50" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Author Phone Number:</b></td>
				<td><input type="text" name="author_phone_number" size="50" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>complain Description:</b></td>
				<td><textarea name="product_desc" cols="30" rows="10"></textarea></td>
			</tr>
			
			
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Now"/></td>
			</tr>
		
		</table>
	
	
	</form>

</body>
</html>
