<?php 
include('connect.php');

if (isset($_POST['btnSave'])) {
	$PN=$_POST['txtname'];
	$price=$_POST['txtprice'];
	$Q=$_POST['txtqty'];
	$Des=$_POST['txtdes'];
	$cbotype=$_POST['cbotype'];
	$status=$_POST['txtstatus'];
	$image=$_FILES['fileimg']['name'];

	$select= "SELECT * FROM Product WHERE ProductName= '$PN'";
	$ret=mysqli_query($connect,$select);
	$count=mysqli_num_rows($ret);

	if ($count>0) {
		echo "<script>alert('Product Name already exist.'</script>";
		exit();
	}
	else{
		
		$query="INSERT INTO Product
		(ProductName,ProductAmount,ProductQuantity, ProductImage, Description, ProductTypeID, Status)
		VALUES ('$PN','$price','$Q','$image','$Des','$cbotype', '$status')";
		$result=mysqli_query($connect,$query);

		if ($result) {
			echo "<script>alert('Succcess')</script>";
		}
		else{
			echo "<script>alert('Error')</script>";
		}
	}



}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	
 	<title>Product Entry</title>
 </head>
 <body>
 <form action="ProductEntry.php" method="POST" enctype="multipart/form-data">
 	<fieldset>
 		<legend>
 			Product Entry
 		</legend>
 		<table border="1px">
 			<tr>
 				<td>Product Name</td>
 				<td>
 					<input type="text" name="txtname" required />
 				</td>
 			</tr>

 			

 			<tr>
 				<td>Product Amount</td>
 				<td>
 					<input type="text" name="txtprice" required />
 				</td>
 			</tr>
 			<tr>
 				<td>Product Quantity</td>
 				<td>
 					<input type="number" name="txtqty" required />
 				</td>
 			</tr>
 			
 			<tr>
 				<td>Product Image</td>
 				<td>
 					<input type="File" name="fileimg" required />
 				</td>
 			</tr>
 			<tr>
 				<td>Description</td>
 				<td>
 					<input type="text" name="txtdes" required />
 				</td>
 			</tr>
 			<tr>
 				<td>Choose Product Type</td>
 				<td>
 					<select name="cbotype">
 						<option>Choose Product Type</option>
 						<?php 
 						$query="SELECT * FROM ProductType";
 						$ret=mysqli_query($connect,$query);
 						$count=mysqli_num_rows($ret);

 						for ($i=0; $i <$count ; $i++) { 
 							$row=mysqli_fetch_array($ret);
 							$TypeID=$row['ProductTypeID'];
 							$name=$row['ProductName'];

 							echo "<option value='$TypeID'>$TypeID - $name</option>";
 						}

 						 ?>
 						
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td>Status</td>
 				<td>
 					<input type="text" name="txtstatus" required />
 				</td>
 			</tr>

 			<tr>
 				<td></td>
 				<td>
 					<input type="submit" name="btnSave" value="Save"/>
 					<input type="reset" name="btnClear" value="Clear"/>
 				</td>
 			</tr>



 		</table>
 	</fieldset>
 </form>

 </body>
 </html>