<?php 
include('connect.php');

if ( isset($_POST['btnSubmit'])) 
{
	$type=$_POST['txttypename'];

	$check="SELECT * FROM ProductType WHERE ProductName='$type'";

	/*if ($check>0) {
		echo "<script>alert('This product type is already exist!!!')</script>";
	}
	else{*/
		$insert="INSERT INTO ProductType(ProductName) 
		Values('$type')";

		$query=mysqli_query($connect,$insert);

		if ($query){
			echo "<script>alert('Succeess!')</script>";
		}
		else
			{
			echo "<script>alert('error')</script>";
		}
	//}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Product Type</title>
 </head>
 <body>

 <form action="ProductType.php" method="POST">
 	<table border="1"  width="100px">
 		<tr>
 			<th colspan="2">Product Type Registration</th>
 		</tr>
 		<tr>
 			<td>
 				 ProductType
 			</td>
 			<td>
 				<input type="text" name="txttypename" placeholder="Enter ProductType" required/>
 			</td>
 		</tr>

 		<tr>
 			<td></td>
 			<td>
 				<input type="submit" name="btnSubmit" value="Submit"/>
 				<input type="reset" name="btnReset" value="Clear" /> 
 			</td>
 		</tr>

 			<a href="ProductEntry.php">Product Entry</a>	
 			
 		
 		
  

 </table>
  
 </form>

 </body>
 </html>