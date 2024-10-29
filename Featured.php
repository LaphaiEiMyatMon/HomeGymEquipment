<?php 
session_start();
include('connect.php');


 ?>






 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Featured</title>

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
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Featured Page</span></h1>
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
                     <a href="Featured.php" class="nav-item nav-link active">Featured</a>
                    <a href="CustomerRegister.php" class="nav-item nav-link">Register</a>
                    <a href="CustomerLogin.php" class="nav-item nav-link ">Login</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                 <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Get Quote</a>
            </div>
        </nav>
    </div>
<br><br>
<div class="row">
  <div class="column" style="width:500px" >
    <h3 class="text-black" align="center">What is wearable technology?</h3><br>
    <p style=" margin-left: 60px;">  Wearable technology is any kind of electronic device designed to be worn on the user's body. Such devices can take many different forms, including jewelry, accessories, medical devices, and clothing or elements of clothing. The term wearable computing implies processing or communications capabilities, but in reality, the sophistication among wearables can vary. </p> <br>

    <h4 align="center">THREE (3) different categories</h4>
    <p  style=" margin-left: 80px;">
        (1) Watches <br>
        (2) Glasses <br> 
        (3) Rings <br>
    </p>
  
  <img align="center" src="img/feature1.png"  width="142px" height="150px" style=" margin-left: 50px;">
    <img align="center" src="img/feature1.jfif" width="145px" height="150px">
    <img align="center" src="img/feature3.jpg"  width="142px" height="150px">
    <br>
    <br>

    <p style=" margin-left: 60px;">  The most sophisticated examples of wearable technology include artificial intelligence (AI) hearing aids, Google Glass and Microsoft's HoloLens, and a holographic computer in the form of a virtual reality (VR) headset. An example of a less complex form of wearable technology is a disposable skin patch with sensors that transmit patient data wirelessly to a control device in a healthcare facility. </p><br>


    <h4 class="text-black" align="center" style=" margin-left: 60px;">
        How does wearable technology work?
        
    </h4>
    
    <p style=" margin-left: 60px;">Wearables are embedded with built-in sensors that keep track of bodily movements, provide biometric identification or assist with location tracking. For example, activity trackers or smartwatches -- the most common types of wearables -- come with a strap that wraps around the user's wrist to monitor their physical activities or vitals throughout the day.

    </p>

    <h4 align="center" style=" margin-left: 30px;"> "The most featured wearable technology"</h4>
    <img  src="img/feature4.png" height="150px" width="230px" style=" margin-left: 90px;" ><b>Rings</b>




  </div>
  

  <div class="column" style="width:890px" >
    <h2 class="text-black" align="center">"Wearable Technology Categories"</h2>
    <fieldset>
    
   
    <table align="right">

        <?php 
        $query="SELECT * FROM Product WHERE Status='Feature'";
        $ret=mysqli_query($connect, $query);
        $count=mysqli_num_rows($ret);

        if ($count ==0) {
            echo "<p>No record found! </p>";
            exit();
}
    else
    {
        for ($i=0; $i <$count ; $i+=3) 
        { 
            $query1="SELECT * FROM Product WHERE Status='Feature' LIMIT $i,3";
            $ret1=mysqli_query($connect, $query1);
            $count1=mysqli_num_rows($ret1);

            echo "<tr>";


            for ($a=0; $a <$count1 ; $a++)
             { 
                $data=mysqli_fetch_array($ret1);
                $ProductID=$data['ProductID'];
                $name=$data['ProductName'];
                $amount=$data['ProductAmount'];
                $image=$data['ProductImage'];

                ?>

                <td  ><br><br>
                    <img src="<?php echo $image ?>" width="250px" height="220px"><br><br>
                    Name :<b><?php echo $name ?></b><br>
                    Price  :<b><?php echo $amount ?>MMK</b>
                    <a href="ProductDetail.php?ProductID=<?php echo $ProductID ?>" class="btn-sm btn-success">Buy</a>
                </td>
                    
                    <?php   
                    }
                    echo "</tr>";
    }
}
?>


    </table>
 </fieldset>
  </div>
</div>
        

 
 <br><br><br>
 <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white">(HGE)</h1>
                <p class="m-0"><span class="text-primary">Home Gym Equipment</span></p>
                <a href="/HGE/Featured.php">You Are At Featured Page. </a>
                
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