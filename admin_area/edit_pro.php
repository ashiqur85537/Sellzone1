
<!DOCTYPE html>
<?php 

include("include/include.php");

if (isset($_GET['edit_pro'])) {
	
	$get_id= $_GET['edit_pro'];

	$get_pro = "select * from products where product_id= '$get_id' "; //order by RAND() LIMIT 0,6

		$run_pro = mysqli_query($con,$get_pro);
		
		$row_pro = mysqli_fetch_array($run_pro);

			
			$pro_id = $row_pro['product_id'];

			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			$pro_desc = $row_pro['product_desc'];
			$pro_cat = $row_pro['product_cat'];
			$pro_brand = $row_pro['product_brand'];
			
			 $author_address = $row_pro['author_address'];
		     $author_phone_number = $row_pro['author_phone_number'];
		     $pro_keywords = $row_pro['product_keywords'];


}

?>
<html>
<head>
	<title>Update Product</title>
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="AddProduct.css"> -->
	<link rel="stylesheet" type="text/css" href="insert_product.css">

<!-- 	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
 <script>
        tinymce.init({selector:'textarea'});
</script>  -->


</head>
<body>

<form action="" method="post" enctype="multipart/form-data" > 
		
		<!-- <table align="center" width="80%" border="2" bgcolor="#187eae"> -->
		<table align="center" width="795" border="2" class="allform">
			
			<tr align="center">
				<td colspan="7"><h2>Edit and Update Product</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" value=" <?php echo $pro_title; ?>"      /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Category:</b></td>
				<td>
				<select name="product_cat" >
					<option> <?php echo $pro_cat; ?> </option>
					
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
					<option> <?php echo $pro_brand; ?> </option>
					<?php 

				getBrands();	
					?>
				</select>
				
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" /> <img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"> </td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" value="<?php echo $pro_price; ?>" /></td>
			</tr>
			<tr>
				<td align="right"><b>Author address:</b></td>
				<td><input type="text" name="author_address"value="<?php echo              $author_address; ?>"/></td>
			</tr>
			<tr>
				<td align="right"><b>Author Phone Number:</b></td>
				<td><input type="text" name="author_phone_number" 
					value="<?php echo $author_phone_number; ?>"

					/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="product_desc" cols="60" rows="10">
					<?php echo $pro_desc; ?>
				</textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Keywords:</b></td>
				<td><input type="text" name="product_keywords" size="50" 
					value="<?php echo $pro_keywords ?>"/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit"name="update_product" value="Update Product"/></td>
			</tr>
		
		</table>
	
	
	</form>
	

</body>
</html>

<?php 
	
	
	//inserting all data to database using Insert Product Now button
	if(isset($_POST['update_product'])){

		// inthis line we check the button which name is insert now  is click orr not.By using isset() method, this method take one parameter in this case $_POST because we set the form method as post so we need to use this $POST method. Inside this post method we use 'insert_post' because we give the name of the button (insert now) is insert_post.



	
		//getting the text data from the fields

		$update_id=$pro_id;

		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];

		$author_address = $_POST['author_address'];
		$author_phone_number = $_POST['author_phone_number'];

		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];

		//in the above lines we just assign the valus that comes from the from fields to the local veriables.

	
		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		
		
		// upload image in a specific folder path is:C:\xampp\htdocs\ecommerce\admin_area\product_images

		move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
		
		//writting the query for update this data to product table that inside the ecomerce  database

		 $update_product = "update products set product_cat='$product_cat',product_brand='$product_brand', product_title='$product_title',product_price='$product_price',author_address='$author_address',author_phone_number='$author_phone_number',product_desc='$product_desc',product_image='$product_image',product_keywords='$product_keywords' where product_id='$update_id' "; 


		 
		 //run thoes query
		 $run_product = mysqli_query($con, $update_product);
		 

		 if($run_product){
		 
		 echo "<script>alert('Product Has been updated!')</script>";
		 
		 echo "<script>window.open('index.php?view_products','_self')</script>";
		 }
	}



 ?>