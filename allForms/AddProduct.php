<?php 
session_start();
if(!isset($_SESSION['user'])){
header('location:login.php');
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>AddProduct</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="AddProduct.css">
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
		<form action="">
			<input class="search_area" type="text" name="text" placeholder="Search here">
			<input class="search_btn " type="submit" name="submit" value="Search">
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
		<a href="#">Home</a>
		<a href="#">Mouse</a>
		<a href="#">key Board</a>
		<a href="#">Monitor</a>
		<a href="#">Sound box</a>
		<a href="#">Complain box</a>
		<a href="#">Contact info.</a>
		<a href="#">About us</a>
		<!-- <a href="logout.php">
		<input type="submit" name="submit">
		</a> -->

		<a href="logout.php">
		<button name="submit" type="submit" style="background-color: #2F4F4F;
 	border:none;
 	color: white;">Logout</button>
		</a>
		
	</nav>
</div>
</section>
<br>
<br>
<!-- /navBar -->

	<form class="allform">
		<div id="dr">
		<label for="DropDown">DropDown:</label>
		<select name="DropDown" id="DropDown">
			<option>Mouse</option>
			<option>Key Board</option>
			<option>Monitor</option>
			<option>Sound Box</option>
			<option>Others</option>
		</select>
		</div>
		<!-- </div> -->
		<br>
		
		<!-- info -->
			<!-- <div> -->
				<div id="m" >
				<label for="pId"> Product id:</label>
				</div>
					<input type="text" name="pId" id="pId" placeholder="123" required="">
					<br>
					
					<!-- pName -->
					<div class="margin" id="m1">
					<label for="pName"> Product Name:</label>
					</div>
					<input type="text" name="pName" id="pName" placeholder="abc" required="">
					
					<!-- /pName -->
					<br>
					
					<!-- pDetails -->
					<div class="margin" id="m1">
					<label for="pDetails"> Product details:</label>
					</div>
					<input type="text" name="pDetails" id="pDetails" placeholder="abc" required="">
					
					<!-- pDeteals -->
					<br>
					<!-- cInfo -->
					<div class="margin" id="m2">
					<label for="cInfo"> Contact Information:</label>
					</div>
					<input type="text" name="cInfo" id="cInfo" placeholder="abc" required="">
					
					<!-- cInfo -->
					<!-- File -->
					<div class="margin" id="m3">
					<label for="file"> Upload Picture:</label>
					</div>
					<input id="m4" type="file" name="file" id="file">
					
					<!-- file -->
					<br>
					<!-- button -->
					<div class="margin">
					<input class="btn" type="submit" name="Submit" value="Submit">
					</div>
					<!-- /button -->

			

		<!-- /info -->
		
	</form>

</body>
</html>