<?php 	

session_start();
include('connect.php');
include('Shopping_Cart_Functions.php');

if (isset($_REQUEST['Action']))
{
	$Action=$_REQUEST['Action'];
	if ($Action === "Remove")
	 {
		$Product_ID=$_REQUEST['ProductID'];
		RemoveShoppingCart($Product_ID);
	}
	else if ($Action === "Buy")
	 {
		$txtProductID=$_GET['txtProductID'];
		$txtBuyQty=$_GET['txtBuyQty'];
		AddShoppingCart($txtProductID,$txtBuyQty);
	}
	else
	{
		ClearShoppingCart();
	}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Shopping Cart</title>
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
 </head>
 <body>

 	<style type="text/css">
 		
 		th {
  text-align: center;
   color: black;
}
 		td {
  text-align: center;
   color: black;
}

legend {
  
    font-size: 40px;
}
 	</style>
 	<!-- Topbar Start -->
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


    <!-- Navbar Start -->
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
                    <a href="ProductDisplay.php" class="nav-item nav-link">Gallery</a>
                     <a href="Featured.php" class="nav-item nav-link">Featured</a>
                    <a href="CustomerRegister.php" class="nav-item nav-link">Register</a>
                    <a href="CustomerLogin.php" class="nav-item nav-link ">Login</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
  <form action="Shopping_Cart.php" method="GET">
  	<br><fieldset> <br>
  		<legend class="text-primary" align="center" font><b>Here is Your Shopping Cart</b></legend>

  		<?php 	
  		if ( !isset($_SESSION['ShoppingCartFunctions'])) 
  		{
  			echo "<div class='card bg-danger text-white'>
    <div class='card-body' align='center' >Your Shopping Cart is Empty!!!</div>
  </div><br>";



  			echo "<br> <div align='center' ><a href='ProductDisplay.php'  class='btn-lg btn-success'>Continue Shopping</a></div>
  
  			";
  		}
  		else
  		{
  			?>
  			 <table border="2px" align="center" style="width: 65%;">
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

					echo "<td style='text-align: center;'><img src='$Product_Image_1' width='100px' height='100px'/></td>";
					echo "<td>$Product_ID</td>";
					echo "<td>$Product_Name</td>";
					echo "<td>$Product_Amount</td>";
					echo "<td>$BuyQty</td>";
					echo "<td>$subTotal</td>";
					echo "<td><a href='Shopping_Cart.php?ProductID=$Product_ID&Action=Remove' class=' btn btn-danger'>Remove</a></td> ";
					echo "</tr>";
  			 		}	

  			 	 ?>

  			 	 <tr>
  			 	 	<td align="center" colspan="7"> <br>

  			 	 		Sub_Total:<b> <?php echo CalculateTotalAmount() ?></b><br><br>

  			 	 		VAT (5%) :<b><?php echo CalculateVAT() ?></b><br><br>

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
  </form>
      <!-- Footer Start -->
    <br><br><br><div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white">(HGE)</h1>
                <p class="m-0"><span class="text-primary">Home Gym Equipment</span></p>
                <a href="/HGE/Shopping_Cart.php">This is Your Shopping Cart </a>
                
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