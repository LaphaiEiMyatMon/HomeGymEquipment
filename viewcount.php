<?php 
session_start();
include('connect.php');

if (!isset($_SESSION['cusid'])) 
{
	echo "<script>alert('Please Login!)</script>";
}

else
{
 	$customerid=$_SESSION['cusid'];
 	$insert="SELECT * FROM Customers WHERE CustomerID='$customerid'";
 	$query=mysqli_query($connect,$insert);
 	$count=mysqli_num_rows($query);

 	if($count>0)
 	{
 		$data=mysqli_fetch_array($query);
 		$view=$data['ViewCount'];
 		echo "View Count :" .$view;
 	}


}



 ?>