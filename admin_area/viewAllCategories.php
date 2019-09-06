
<!DOCTYPE html>
<?php 

include("include/include.php");

?>
<html>
<head>
	<title>Inserting Product</title>
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="AddProduct.css"> -->
	<link rel="stylesheet" type="text/css" href="insert_product.css">

<!-- 	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
 <script>
        tinymce.init({selector:'textarea'});
</script>  -->


</head>
<body>

<form action="insert_product.php" method="post" enctype="multipart/form-data" > 
		
		<!-- <table align="center" width="80%" border="2" bgcolor="#187eae"> -->
		<table align="center" width="795" border="2" class="allform">
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Post Here</h2></td>
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
			
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Author address:</b></td>
				<td><input type="text" name="author_address" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Author Phone Number:</b></td>
				<td><input type="text" name="author_phone_number" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="product_desc" cols="60" rows="10"></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Keywords:</b></td>
				<td><input type="text" name="product_keywords" size="50" required/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
			</tr>
		
		</table>
	
	
	</form>
	

</body>
</html>