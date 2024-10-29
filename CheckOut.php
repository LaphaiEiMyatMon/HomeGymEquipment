<?php 
session_start();
include('connect.php');
include('Shopping_Cart_Functions.php');
include('AutoID_Functions.php');


 if (!isset($_SESSION['cusid']))
  {
	echo "<script>window.alert('Please Login First')</script>";
 	echo "<script>window.location='CustomerLogin.php' </script>";
 	exit();
 }
 else
 {
	$CID=$_SESSION['cusid'];
	$query="SELECT * FROM Customers WHERE CustomerID='$CID'";
	$run=mysqli_query($connect, $query);
	$row=mysqli_fetch_array($run);

 }

 if (isset($_POST['btnConfirm']))
  {
 	$CustomerID=$_SESSION['cusid'];
 	$Status ="Pending";
 	$txtOrderID=$_POST['txtOrderID'];
 	$txtOrderDate=$_POST['txtOrderDate'];
 	$txtTotalAmount=$_POST['txtTotalAmount'];
 	$txtVAT=$_POST['txtVAT'];
 	$txtGrandTotal=$_POST['txtGrandTotal'];
 	$txtTotalQuantity=$_POST['txtTotalQuantity'];
 	$txtRemark=$_POST['txtRemark'];
 	$rdoPaymentType=$_POST['rdoPaymentType'];

 	$rdoDeliveryType=$_POST['rdoDeliveryType'];
 	if ($rdoDeliveryType == 1) 
 	{
 		$Address=$_POST['txtAddress'];
 		$Phone=$_POST['txtPhone'];

 	}
 	else
 	{
 		$CID=$_SESSION['cusid'];
 		$select="SELECT * FROM Customers WHERE CustomerID='$CID'";
 		$query=mysqli_query($connect, $select);
 		$data=mysqli_fetch_array($query);
 		$Address=$data['Address'];
 		$Phone=$data['PhoneNo'];
 	}


 	$Orderquery="INSERT INTO Orders
 	(OrderID, OrderDate, CustomerID, Order_Total_Amount, Tax, All_Total, Order_Quantity, Remark, Payment_Type, Order_Location, Order_Phone, Order_Status)
 	VALUES('$txtOrderID', '$txtOrderDate','$CustomerID', '$txtTotalAmount', '$txtVAT','$txtGrandTotal','$txtTotalQuantity','$txtRemark','$rdoPaymentType','$Address','$Phone','$Status')";

 	$result=mysqli_query($connect, $Orderquery);
 	$size=count($_SESSION['ShoppingCartFunctions']);

 	for ($i=0; $i < $size ; $i++) 
 	{ 
 		$Product_ID=$_SESSION['ShoppingCartFunctions'][$i]['ProductID'];
 		$BuyQty=$_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
 		$Product_Amount=$_SESSION['ShoppingCartFunctions'][$i]['ProductAmount'];
					
 	}

 	$ODquery ="INSERT INTO orderdetail(OrderID, ProductID, Product_Price, BuyQty)
 	VALUES('$txtOrderID','$Product_ID','$Product_Amount','$BuyQty')";

 	$result=mysqli_query($connect,$ODquery);

 	$update= "UPDATE Product set ProductQuantity='$BuyQty' WHERE ProductID='$Product_ID'";
 	$updateret=mysqli_query($connect,$update);

 	if ($result)
 	 {
 		unset($_SESSION['ShoppingCartFunctions']);
 		echo "<script>alert ('Payment Successfully')</script>";
 		echo "<script>window.location='ProductDisplay.php' </script>";
 	}
 	else
 	{
 		echo "<script> alert('Payment Failed! Please Try Again')</script>";
 	}

 }


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Payment</title>
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">
   

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


 	<script type="text/javascript">
 		function showPaymentTable()
 		{
 			document.getElementById('PaymentTable').style.visibility="Visible";

 		}
 		function hidePaymentTable()
 		{
 			document.getElementById('PaymentTable').style.visibility="hidden";
 		}
 		function showAddressTable()
 		{
 			document.getElementById('AddressTable').style.visibility="Visible";
 		}
 		function hideAdressTable()
 		{
 			document.getElementById('AddressTable').style.visibility="hidden";
 		}
 	</script>
 </head>

 <body>

 	


 	<div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pr-3" href="">FAQs</a>
                    <span class="text-white">|</span>
                    <a class="text-white px-3" href="">Help</a>
                    <span class="text-white">|</span>
                    <a class="text-white pl-3" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">"Home Gym Equipment"</span>(HGE)</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Opening Hours</h6>
                        <p class="m-0">8.00AM - 9.00PM</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">hge111@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                
                
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                     <a href="home.php" class="nav-item nav-link ">Home</a>
                    <a href="information.php" class="nav-item nav-link ">Information</a>
                    <a href="wanted.php" class="nav-item nav-link">Wanted</a>
                    <a href="workshop.php" class="nav-item nav-link ">Work Shop</a>
                    <a href="ProductDisplay.php" class="nav-item nav-link ">Gallery</a>
                     <a href="Featured.php" class="nav-item nav-link">Featured</a>
                    <a href="CustomerRegister.php" class="nav-item nav-link">Register</a>
                    <a href="CustomerLogin.php" class="nav-item nav-link ">Login</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                 <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Get Quote</a>
            </div>
        </nav>
    </div>
    <br>
 	<form action="CheckOut.php" method="POST">

 		<div class="container">
  
  

  <div class="card bg-primary text-white">
    <div class="card-body"> 		<fieldset>			
 		<legend>(1) Customer Information</legend>
 		<table >
 			<tr>
 				<td>Customer Name</td>
 				<td>:<?php echo $row['CustomerName'] ?></td>
 			</tr>
 			

 			<tr>
 				<td>Phone</td>
 				<td>:<?php echo $row['PhoneNo'] ?></td>
 			</tr>


 			 <tr>
 				<td>Email</td>
 				<td>:<?php echo $row['Email'] ?></td>
 			</tr>

 			<tr>
 				<td>Address</td>
 				<td>:<?php echo $row['Address'] ?></td>
 			</tr>
 		</table>
 		</fieldset></div>
  </div>
  <br>

  <div class="card bg-success text-white">
    <div class="card-body"><fieldset>
 			<legend>(2) Buying Order Information</legend>
 			<table>
 				<tr>
 					<td>Order Number</td>
 					<td>
 						<input type="text" name="txtOrderID" value="<?php echo AutoID('orders','OrderID','ORD-',6) ?>"
 						readonly/>
 					</td>
 				</tr>


 				<tr>
 					<td>Order Date</td>
 					<td>
 						<input type="text" name="txtOrderDate" value="<?php echo date('Y-m-d')?>"
 						 readonly/>
 					</td>
 				</tr>

 				<tr>
 					<td>Order Total Amount</td>
 					<td>
 						<input type="text" name="txtTotalAmount" value="<?php echo CalculateTotalAmount() ?>" readonly/>
 					</td>
 				</tr>

				<tr>
 					<td>Tax</td>
 					<td>
 						<input type="text" name="txtVAT" value="<?php echo CalculateVAT() ?>" readonly/>
 					</td>
 				</tr>

 				

 				<tr>
 					<td>All Total</td>
 					<td>
 						<input type="text" name="txtGrandTotal" value="<?php echo CalculateTotalAmount()+ CalculateVAT() ?>" readonly/>MMK
 					</td>
 				</tr>

 				<tr>
 					<td>Order Quantity</td>
 					<td>
 						<input type="number" name="txtTotalQuantity" value="<?php echo CalculateTotalQuantity() ?>" readonly/>Pcs
 					</td>
 				</tr>

 				<tr>
 					<td>Remark</td>
 					<td>
 						<input type="text" name="txtRemark" placeholder="Enter Your Description" />
 					</td>
 				</tr>
 			</table>
 		</fieldset></div>
  </div>
  <br>

  <div class="card bg-info text-white">
    <div class="card-body"><fieldset>
 			<legend>(3) Payment Section	</legend>
 			<table>
 				<tr>
 					<td>Payment Type <br>
 					<input type="radio" name="rdoPaymentType" value="MPU" onClick="ShowPaymentTable()"/>MPU
 					<input type="radio" name="rdoPaymentType" value="VISA" onClick="ShowPaymentTable()"/>VISA
 					<input type="radio" name="rdoPaymentType" value="COD" onClick="hidePaymentTable()"/>COD
 					</td>
 				</tr>

 				<tr>
 					<td>
 						<table id="PaymentTable" name="PaymentTable">
 							<tr>
 							<td>
 								<br>Name <small>(as it appear on your card)</small><br>
 								<input type="text" name="txtNameOnCard" placeholder="Enter your name on card"><br><br>

 								CardNumber <small>(no dashs or spaces)</small><br>
 								<input type="text" name="txtNameOnCard" placeholder="Enter card number"><br><br>

 								Expiration Date <small>(no dashs or spaces)</small><br>
 								<select name="cboMonth">
 									<option>Month</option>
 									<option>June</option>
 									<option>November</option>
 									<option>December</option>
 								</select>
 								

 								<select name="cboyear">
 									<option>Year</option>
 									<option>2023</option>
 									<option>2024</option>
 									<option>2025</option>
 								</select><br><br>

 								Security Code <small>(3 on Back, 4 on front)</small><br>
 								<input type="number" name="txtsecuritycode" placeholder="ex.123"/>
 							</td>	
 							</tr>
 						</table>
 					</td>
 				</tr>
 			</table>
 		</fieldset></div>
  </div>
  <br>


 <div class="card bg-secondary text-white">
    <div class="card-body"><fieldset>
	<legend>(4) Order Delivery Details:</legend>
	<table>
		<tr>
			<td>Delivery Type <br>
				<input type="radio" name="rdoDeliveryType" value="1" onClick="showAddressTable()" checked />Addtional Address				
			

			<input type="radio" name="rdoDeliveryType" value="1" onClick="hideAdressTable()" />Same Address	
			</td>			
			
		</tr>

		<tr>
			<td>
				<table id="AddressTable" name="AddressTable">
					<tr>
						<td>
							<br>DeliveryPhone : <br>
							<input type="text" name="txtPhone"><br><br>
							DeliveryAddress : <br>
							<textarea name="txtAddress"></textarea>
						</td>
					</tr>
					
				</table>
			</td>
		</tr>

		<tr>
			<td>
				<hr>
				<input type="submit" class="btn btn-primary" name="btnConfirm" value="Confirm Order"/>
				<a href="ProductDisplay.php"  class="btn btn-warning">Continue Shopping</a>
			</td>
		</tr>
	</table>
</fieldset></div>
  </div>
<br>


  <div class="card">
    <div class="card-body"><fieldset>
	<legend> (5) Orders Summary</legend>

			<?php 	
  		if ( !isset($_SESSION['ShoppingCartFunctions'])) 
  		{
  			echo "<p>Shopping Cart is Empty</p>";
  			echo "<a href='ProductDisplay.php'>Continue Shopping</a>";
  		}
  		else
  		{
  			?>
  			 <table border="1px" style="width: 100%;">
  			 	<tr>
  			 		<th>Image</th>
  			 		<th>ProductID</th>
  			 		<th>ProductName</th>
  			 		<th>Price</th>
  			 		<th>BuyQty</th>
  			 		<th>SubTotal</th>
  			 		<th>Action</th>
  			 	</tr>

  			 	<?php 
  			 	$size=count($_SESSION['ShoppingCartFunctions']);

  			 	for ($i=0; $i < $size ; $i++)
  			 	 { 
  			 	 	$Product_Image_1=$_SESSION['ShoppingCartFunctions'][$i]['ProductImage'];
  			 		$Product_ID=$_SESSION['ShoppingCartFunctions'][$i]['ProductID'];
					$Product_Name=$_SESSION['ShoppingCartFunctions'][$i]['ProductName'];
					$Product_Amount=$_SESSION['ShoppingCartFunctions'][$i]['ProductAmount'];
					$BuyQty=$_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
					$subTotal=$_SESSION['ShoppingCartFunctions'][$i]['ProductAmount']*$_SESSION['ShoppingCartFunctions'][$i]['BuyQty'];
					echo "<tr>";

					echo "<td><img src='$Product_Image_1' width='100px' height='100px'/></td>";
					echo "<td>$Product_ID</td>";
					echo "<td>$Product_Name</td>";
					echo "<td>$Product_Amount</td>";
					echo "<td>$BuyQty</td>";
					echo "<td>$subTotal</td>";
					echo "<td><a href='Shopping_Cart.php?Product_ID=$Product_ID&Action=Remove' class=' btn btn-danger'>Remove</a></td> ";
					echo "</tr>";
  			 		}	

  			 	 ?>

  			 	 <tr>
  			 	 	<td align="center" colspan="7"><br>

  			 	 		Sub_Total: <b> <?php echo CalculateTotalAmount() ?></b><br><br>

  			 	 		VAT (5%):<b><?php echo CalculateVAT() ?></b><br><br>

  			 	 		Grand Total: <b><?php echo CalculateTotalAmount()+CalculateVAT() ?></b><br><br>

  			 	 		<a href="CheckOut.php"  class="btn btn-success">Make Payment</a>

  			 	 		

  			 	 		<a href="ProductDisplay.php"  class="btn btn-warning">Continue Shopping</a>

  			 	 		<a href="Shopping_Cart.php?Action=ClearAll"  class="btn btn-danger">Clear Cart</a>
  			 	 		<br><br>
  			 	 		
  			 	 	</td>
  			 	 </tr>
  			 </table>
<?php 

}	
 ?>
  	
</fieldset>
</div>
  </div>
</div>



 	</form>
 	<br>
 <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white">(HGE)</h1>
                <p class="m-0"><span class="text-primary">Home Gym Equipment</span></p>
                <a href="/HGE/CheckOut.php">You Are At Payment Page. </a>
                
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>hge111@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="home.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="Featured.php"><i class="fa fa-angle-right mr-2"></i>Featured</a>
                            <a class="text-white mb-2" href="information.php"><i class="fa fa-angle-right mr-2"></i>Information</a>
                            <a class="text-white mb-2" href="WorkShop.php"><i class="fa fa-angle-right mr-2"></i>Work Shop</a>
                            <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Home Gym Equipment</a>. All Rights Reserved. 
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

   
    <script src="js/main.js"></script>
 </body>
 </html>