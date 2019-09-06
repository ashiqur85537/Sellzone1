<?php


//function that connect the database
$con = mysqli_connect("localhost","root","","sellzone");
//

//getting categories
function getCat(){

	global $con;

	$get_cats = "select * from categories"; 
    //$gets_cats contain the qeury result that we written after = sign

	$run_cats = mysqli_query($con, $get_cats); //now we run the query using mysqli_query() functon that has 2 paramiters one is the data base connection variable ($con) and another is $get_cats that contains the query.

	while ($row_cats=mysqli_fetch_array($run_cats)) {
		
		$cat_id  = $row_cats['cat_id'];
		$cat_title  = $row_cats['cat_title'];
		
		//in this above while loop in side the () we create a local veriable name $row_cats and asign the result of a function called mysqli_fetch_array (), AND WHICH HAVE 1 paramiter called $run_cats. By all this we accutially fetch all the data which inside the ecommrce database.
	    // after that we declear 2 local veriable  $cat_id and $cat_title and inside this two veriable we assign 'cat_id' and 'cat_title' using $row_cats which besically the row of ecommerce database.
		echo "<option value='$cat_id'>$cat_title</option>";
		

	}
		
}

//getting brands
function getBrands(){

	global $con;

	$get_brands = "select * from brands"; 
    //$gets_brands contain the qeury result that we written after = sign

	$run_brands = mysqli_query($con, $get_brands); //now we run the query using mysqli_query() functon that has 2 paramiters one is the data base connection variable ($con) and another is $get_brands that contains the query.

	while ($row_brands=mysqli_fetch_array($run_brands)) {
		
		$brand_id  = $row_brands['brand_id'];
		$brand_title  = $row_brands['brand_title'];
		
		//in this above while loop in side the () we create a local veriable name $row_cats and asign the result of a function called mysqli_fetch_array (), AND WHICH HAVE 1 paramiter called $run_brands. By all this we accutially fetch all the data which inside the ecommrce database.
	    // after that we declear 2 local veriable  $cat_id and $cat_title and inside this two veriable we assign 'cat_id' and 'cat_title' using $row_cats which besically the row of ecommerce database.
		echo "<option value='$brand_id'>$brand_title</option>";
		

	}
		
}

	//inserting all data to database using Insert Product Now button
	if(isset($_POST['insert_post'])){

		// inthis line we check the button which name is insert now  is click orr not.By using isset() method, this method take one parameter in this case $_POST because we set the form method as post so we need to use this $POST method. Inside this post method we use 'insert_post' because we give the name of the button (insert now) is insert_post.



	
		//getting the text data from the fields
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
	
		
		//writting the query for inserting this data to product table taht inside the ecomerce  database
		 $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,author_address,author_phone_number,product_desc,product_image,product_keywords) 

		 values ('$product_cat','$product_brand','$product_title','$product_price','$author_address','$author_phone_number','$product_desc','$product_image','$product_keywords')";
		 
		 //run thoes query
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Product Has been inserted!')</script>";
		 // echo "<script>window.open('insert_product.php','_self')</script>";
		 echo "<script>window.open('index.php','_self')</script>";
		 }
	}


?>