<?php 


//function that connect the database
//$con = mysqli_connect("localhost","root","","sellzone");
//
$con = mysqli_connect("localhost","root","","sellzone");



//view compline 

/////////////////////////////////////////////////////////////////////////////////////
	
	
	function viewComplane(){
		global $con;

			
			//$product_id = $_GET['pro_id'];

		
		$get_com = "select * from complain  "; //order by RAND() LIMIT 0,6

		$run_com = mysqli_query($con,$get_com);

		while($row_pro = mysqli_fetch_array($run_com)){

			$complain_id = $row_pro['complain_id'];
			

			////
			$user_name = $row_pro['user_name'];
		    $user_email = $row_pro['user_email'];
		//
		    $product_title = $row_pro['product_title'];
		    $product_cat= $row_pro['product_cat'];
		    $product_brand = $row_pro['product_brand'];
		    $product_image = $row_pro['product_image'];
		    //$product_price = $_POST['product_price'];

		    $author_address = $row_pro['author_phone_number'];
		    $author_phone_number = $row_pro['author_phone_number'];
		    $product_desc = $row_pro['product_desc'];
			////

			
			echo "

			<div id='products_box'>
			

			<img src='complain_images/$product_image'/>
			
			
							<h3>$complain_id</h3>
							<h3>$user_name</h3>
							<h3>$product_title</h3>
							<h3>$product_cat</h3>
							<h3>$product_brand</h3>
							<h3>$product_title</h3>
							<h3>$author_address</h3>
							<h3>$author_phone_number</h3>
							<h3>$product_desc</h3>

						
			</div>


			";
			// <a  href='index.php'><button style='float:right;'>Add to Cart</button></a>
			//inside the div there is a h3 tag which show the title of the product 
			//img tag show the image from product_images folder. Besicaly the  name of the image came from database inside $pro_image veriable then is search the image in side the product_images folder if it is there then it shoe the image  
		}

			
 
	}
/////////////////////////////////////////////////////////////////////////////////////



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
		echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
		
		//inside the a tag we create a link variable 'cat' and inashlize it with the value of $cat_id. that means it pass the value of $cat_id
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
		echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
		

	}
		
}

//geting product from database for index.php page
	function getPro(){

		if (!isset($_GET['cat'])) { 
		//if the category is not selected then show the all product

			if (!isset($_GET['brand'])) { 
			//if the brand is not selected then show the all product   															
					
		

		global $con;

		$get_pro = "select * from products LIMIT 0,6"; //order by RAND() LIMIT 0,6

		$run_pro = mysqli_query($con,$get_pro);

		while($row_pro = mysqli_fetch_array($run_pro)){

			$pro_id = $row_pro['product_id'];
			$pro_cat = $row_pro['product_cat'];
			$pro_brand = $row_pro['product_brand'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			

			
			

			echo "

			<div id='single_product'>
			
			<h3 >$pro_title</h3>
			<br>

			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			
			<br>
			<p><strong>Price: $pro_price tk</strong></p>
			<br>

			
			
			<a href='details.php?pro_id=$pro_id' id='detailsA'><strong>Click here for Details</strong></a>



			</div>


			";
			//
			//<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			//<a  href='index.php?pro_id=$pro_id'><button style='float:right; '>Add to Cart</button></a>
			//
			//inside the div there is a h3 tag which show the title of the product 
			//img tag show the image from product_images folder. Besicaly the  name of the image came from database inside $pro_image veriable then is search the image in side the product_images folder if it is there then it shoe the image 
			//inside the first a tag we give it a name pro_id 
		}

 	  }
 	 }


	}

	//geting product from database for details.php page
	
	function getSinglePro(){
		global $con;


		if (isset($_GET['pro_id'])) {
			
			$product_id = $_GET['pro_id'];


	

		
		$get_pro = "select * from products where product_id='$product_id' "; //order by RAND() LIMIT 0,6

		$run_pro = mysqli_query($con,$get_pro);

		while($row_pro = mysqli_fetch_array($run_pro)){

			$pro_id = $row_pro['product_id'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			$pro_desc = $row_pro['product_desc'];
			
			$author_address = $row_pro['author_address'];
			$author_phone_number = $row_pro['author_phone_number'];

			
			echo "

			<div id='single_product1'>
			

			<img src='admin_area/product_images/$pro_image'/>
			
			
			</div>

			<div id='details_box'>
							<h3>$pro_title</h3>
						<p id='dP'><strong>Price:$pro_price tk</strong></p>
						<br>
						<h5><strong>Contuct Info:</strong></h5>
						<p><strong>Address:$author_address</strong></p>
						<p><strong>Phone Number:$author_phone_number</strong></p>
						<br>
						<h5><strong>Description:</strong></h5>
					   <p><strong>$pro_desc</strong></p>

			</div>


			";
			// <a  href='index.php'><button style='float:right;'>Add to Cart</button></a>
			//inside the div there is a h3 tag which show the title of the product 
			//img tag show the image from product_images folder. Besicaly the  name of the image came from database inside $pro_image veriable then is search the image in side the product_images folder if it is there then it shoe the image  
		}

			}
 
	}



	//geting product from database for index.php page
	function getAllPro(){

		if (!isset($_GET['cat'])) { 
		//if the category is not selected then show the all product

			if (!isset($_GET['brand'])) { 
			//if the brand is not selected then show the all product   															
					
		

		global $con;

		$get_pro = "select * from products"; //order by RAND() LIMIT 0,6

		$run_pro = mysqli_query($con,$get_pro);

		while($row_pro = mysqli_fetch_array($run_pro)){

			$pro_id = $row_pro['product_id'];
			$pro_cat = $row_pro['product_cat'];
			$pro_brand = $row_pro['product_brand'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			

			
			

			echo "

			<div id='single_product'>
			
			<h3 >$pro_title</h3>
			<br>

			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			
			<br>
			<p><strong>Price: $pro_price tk</strong></p>
			<br>

			
			
			<a href='details.php?pro_id=$pro_id' id='detailsA'><strong>Click here for Details</strong></a>



			</div>


			";
			//
			//inside the div there is a h3 tag which show the title of the product 
			//img tag show the image from product_images folder. Besicaly the  name of the image came from database inside $pro_image veriable then is search the image in side the product_images folder if it is there then it shoe the image 
			//inside the first a tag we give it a name pro_id 
		}

 	  }
 	 }


	}






		//geting category base product from database for index.php page
	function getCategoryBasePro(){

		if (isset($_GET['cat'])) { 
		//if the category is  selected then show only thoes products which are belongs to the category

			//if (!isset($_GET['brand'])) { 
			//if the brand is  selected then show the all product   							

			$cat_id = $_GET['cat'];//we store the selected category id in a local veriable ($cat_id) 							
					
		

		global $con;

		$get_pro = "select * from products where product_cat=$cat_id; "; // we match the selected category id with the product category id then show the match products on the index.php page

		$run_pro = mysqli_query($con,$get_pro);

		while($row_pro = mysqli_fetch_array($run_pro)){

			$pro_id = $row_pro['product_id'];
			$pro_cat = $row_pro['product_cat'];
			$pro_brand = $row_pro['product_brand'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			
			echo "

			<div id='single_product'>
			
			<h3 >$pro_title</h3>
			<br>

			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			
			<br>
			<p><strong>Price: $pro_price tk</strong></p>
			<br>

			
			
			<a href='details.php?pro_id=$pro_id' id='detailsA'><strong>Click here for Details</strong></a>



			</div>


			";
			//
			//inside the div there is a h3 tag which show the title of the product 
			//img tag show the image from product_images folder. Besicaly the  name of the image came from database inside $pro_image veriable then is search the image in side the product_images folder if it is there then it shoe the image 
			//inside the first a tag we give it a name pro_id 
		}

 	 // }
 	 }


	}



	//geting brand base product from database for index.php page
	function getBrandBasePro(){

		

			if (isset($_GET['brand'])) { 
			//if the brand is  selected then show the all product   							

			$brand_id = $_GET['brand'];//we store the selected Brand id in a local veriable ($brand_id) 							
					
		

		global $con;

		$get_pro = "select * from products where product_brand=$brand_id ; "; // we match the selected Brand id with the product Product id then show the match products on the index.php page

		$run_pro = mysqli_query($con,$get_pro);

		while($row_pro = mysqli_fetch_array($run_pro)){

			$pro_id = $row_pro['product_id'];
			$pro_cat = $row_pro['product_cat'];
			$pro_brand = $row_pro['product_brand'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			
			echo "

			<div id='single_product'>
			
			<h3 >$pro_title</h3>
			<br>

			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			
			<br>
			<p><strong>Price: $pro_price tk</strong></p>
			<br>

			
			
			<a href='details.php?pro_id=$pro_id' id='detailsA'><strong>Click here for Details</strong></a>



			</div>


			";
			//
			//inside the div there is a h3 tag which show the title of the product 
			//img tag show the image from product_images folder. Besicaly the  name of the image came from database inside $pro_image veriable then is search the image in side the product_images folder if it is there then it shoe the image 
			//inside the first a tag we give it a name pro_id 
		}

 	 // }
 	 }


	}


	//custom search box

	function seachBox(){
		global $con;

		if(isset($_GET['serach'])){

				


		$search_query = $_GET['user_query']	;
		
		
		$get_pro = "select * from products  where product_keywords like '%$search_query%' "; //we seach the value that user give in serach box text area with the value product_keywords which is predefined in database

		$run_pro = mysqli_query($con,$get_pro);

		while($row_pro = mysqli_fetch_array($run_pro)){

			$pro_id = $row_pro['product_id'];
			$pro_cat = $row_pro['product_cat'];
			$pro_brand = $row_pro['product_brand'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			
			echo "

			<div id='single_product'>
			
			<h3 >$pro_title</h3>
			<br>

			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			
			<br>
			<p><strong>Price: $pro_price tk</strong></p>
			<br>

			
			
			<a href='details.php?pro_id=$pro_id' id='detailsA'><strong>Click here for Details</strong></a>



			</div>


			";
			//
			//inside the div there is a h3 tag which show the title of the product 
			//img tag show the image from product_images folder. Besicaly the  name of the image came from database inside $pro_image veriable then is search the image in side the product_images folder if it is there then it shoe the image 
			//inside the first a tag we give it a name pro_id 
		}


		}
	}



 ?>