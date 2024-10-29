<?php 
include('connect.php');

if ( isset($_POST['btnlogin'])) 
{
	$ID=$_POST['txtID'];
	$password=$_POST['txtpassword'];

	$insert="SELECT * FROM Admin WHERE AdminID='$ID' AND Password='$password'";

	$query=mysqli_query($connect, $insert
	);

	$count=mysqli_num_rows($query);

	if($count>0)
	{
		

		echo "<script> alert('Successfully Login!!!')</script>";
		echo "<script> window.location='ProductType.php'</script>";
	}

	else
	{
		
				echo "<script>alert('Login Fail!!! Please Try Again: Error Attempt 2')</script>";
			

			
		}


		
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body>
<form action="Admin.php" method="POST">

	<table  border="1px"> 
		<tr>
			<th colspan="2" align="center">
				Admin Login
			</th>
		</tr>
		<tr>
			<td>ID</td>
			<td>
				<input type="text" name="txtID" placeholder="Enter Your ID" required/>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="Password" name="txtpassword" placeholder="Enter Your Password" required/>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnlogin" value="Login"/>
				<input type="reset" name="btncancel" value="Cancel"/>
			</td>
		</tr>

		
	</table>
</form>
</body>
</html>