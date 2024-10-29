<?php 	
include('connect.php');
session_start();


	 $CID=$_SESSION['cusid'];
	$query="DELETE FROM Customers WHERE CustomerID='$CID'";
    $run=mysqli_query($connect, $query);
     echo "<script> alert('Are you sure do you want to delete?')</script>";
   echo "<script> alert('Successfully Delete!!!')</script>";
    echo "<script>window.location='CustomerRegister.php'</script>";

    



 ?>