
<?php 
session_start();

$con = mysqli_connect('localhost', 'root');
//if($con){
	//echo "connection sucessful";
//}else{
	//echo "no connection";
//}

 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="fontPage.html">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="AddProduct.css"> -->

</head>


<style type="text/css">
	/*.container {
    max-width: 1650px;
}*/

.container img{
	width: 400px;
	height:400px;
}
</style>
<body>


<!-- main header -->
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
	
<!-- /main header -->
<!-- product -->

	
</div>

<!-- navBar -->
<section>
<div id="navBar">
	<nav>
		<a href="myProject/index.php">Home</a>
		<select id="dropDown">
			
			<option value="1">Category</option>
			<option value="2">Mouse</option>
			<option value="3">key board</option>
			<option value="4">Monitor</option>
			<option value="5">Sound box</option>
			<option value="6">Others</option>
			
		</select>
		<a href="#">Complain box</a>
		<a href="#">Contact info.</a>
		<a href="#">About us</a>
		
	</nav>

</div>
</section>
<br><br>
<!-- <form  class="text" action="logincheck.php" method="post"> -->
<form  class="allform" action="logincheck.php" method="post">
    
    <h1>Admin Login</h1>
    <br><br>
     Username: <input type="text"  placeholder="Username" name="user" value="" required="" 
     >
     <br><br>
     Password: <input type="password" placeholder="***"
     name="pass" value="" required=""
     >
     <br><br>


<button class="btn4"  style="text-decoration-color: black" name="submit" type="submit"> 
   Sign In

</button>


</div>
	
</body>
</html>
