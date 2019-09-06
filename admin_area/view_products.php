

<!-- <table width="795" align="center" bgcolor="gray"> -->
<table width="995" align="center" bgcolor="gray">
	<tr align="center">
		<td colspan="6" ><strong> View All Products Here </strong></td>
	</tr>
	<tr align="center" bgcolor="skyblue" >
		<th >S.No</th>
		<th>Title</th>
		<th>Image</th>
		<th>Price</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	
	<?php 
	include("include/include.php");
		global $con;

		$get_pro = "select * from products "; //order by RAND() LIMIT 0,6

		$run_pro = mysqli_query($con,$get_pro);
		$i=0;
		while($row_pro = mysqli_fetch_array($run_pro)){

			
			//$pro_cat = $row_pro['product_cat'];
			//$pro_brand = $row_pro['product_brand'];
			$pro_id = $row_pro['product_id'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			$i++;
			
			//
			//inside the div there is a h3 tag which show the title of the product 
			//img tag show the image from product_images folder. Besicaly the  name of the image came from database inside $pro_image veriable then is search the image in side the product_images folder if it is there then it shoe the image 
			//inside the first a tag we give it a name pro_id 
		//}

 	 ?>
	<tr align="center">
		<td><?php echo $i; ?></td>
		<td><?php echo $pro_title; ?></td>
		

		<td><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60" /></td>
		
		<td><?php echo $pro_price; ?></td>


		<!-- <td><a href="index.php?edit_pro">Edit</a></td>
		<td><a href="delete.php">Delete</a></td> -->
		<td><a href="index.php?edit_pro=<?php echo $pro_id; ?>">Edit</a></td>
		<td><a href="delete.php?delete_pro=<?php echo $pro_id; ?>">Delete</a></td>
	</tr>
<?php } ?>


</table>