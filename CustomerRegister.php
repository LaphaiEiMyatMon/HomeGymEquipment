<?php 

include('connect.php');

if (isset($_POST['btnRegister'])) 
{
    $name=$_POST['txtname'];
    $phone=$_POST['txtphone'];
    $email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
    $address=$_POST['txtaddress'];
    

    $image=$_FILES['filecustomerimg']['name'];
    $folder="img/";
    $filename=$folder.'_'.$image;
    $image=copy($_FILES['filecustomerimg']['tmp_name'],$filename);
    if(!$image)
    {
        echo "<p>Cannot Upload Image</p>";
        exit();
    }

    $select= "SELECT * FROM Customers where Email='$email'";
    $query=mysqli_query($connect,$select);
    $count=mysqli_num_rows($query);
    
    if($count>0)
    {
        echo "<script>alert('This email has already been registered!')</script>";

    }
    else
    {
        $insert="INSERT INTO Customers(CustomerName, PhoneNo, Email, Password, Address,  Image, ViewCount)
        Values('$name','$phone','$email','$password','$address',  '$filename',1)";
        $query=mysqli_query($connect,$insert);
        
        if ($query>0) 
        {
            echo "<script>alert(' Successfully Registered! ')</script>";
            echo "<script>alert('Please Login!')</script>";
            echo "<script>window.location='CustomerLogin.php'</script>";
        }

    }
    
}





 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HGE</title>
    

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


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary"></span>Register</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="home.php" class="nav-item nav-link ">Home</a>
                    <a href="information.php" class="nav-item nav-link ">Information</a>
                    <a href="wanted.php" class="nav-item nav-link ">Wanted</a>
                    <a href="workshop.php" class="nav-item nav-link ">Work Shop</a>
                    <a href="ProductDisplay.php" class="nav-item nav-link">Gallery</a>
                    <a href="Featured.php" class="nav-item nav-link">Featured</a>
                    <a href="CustomerRegister.php" class="nav-item nav-link active">Register</a>
                    <a href="CustomerLogin.php" class="nav-item nav-link">Login</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


  
    <div class="container-fluid bg-light pt-5 pb-4">
        
    </div>
    <!-- Services End -->


    <!-- Register Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                     <h3 class="display-4 mb-5"> <span class="text-primary">Home Gym Equipments</span>(HGE)</h3>
                    <h4 class="text-secondary mb-3">Are you looking for qualitified gym equipments?</h4>
                   
                    <p>You came to the right place. We can support all of your requirements.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    
                                    <h5 class="text-truncate m-0"><i class="fa fa-check-double text-secondary mr-3"></i>Best In Industry</h5>
                                </div>
                                <p>The products from HGE are quilified. We can insure for that.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    
                                   <h5 class="text-truncate m-0"><i class="fa fa-check-double text-secondary mr-3"></i>Safe</h5>
                                </div>
                                <p>Safety first is our first priority. So, customers can use them no doubts.</p>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    
                                    <h5 class="text-truncate m-0"><i class="fa fa-check-double text-secondary mr-3"></i>24/7 Customer Support</h5>
                                </div>

                                <p class="m-0">Call center is available for 24 hours.</p>
                                 <p style="color:tomato;"><br>If you want to know more about latest equipments, register and create an account.</p>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <img src="img/21.jpg" alt=""  width="200" height="150">
                            </div>
                        </div>
                       <!-- <div class="col-sm-10">
                            <div class="d-flex flex-column">
                                                                 
                                    <p style="color:tomato;"><br>If you want to know more about latest equipments, register and create an account.</p>
                                
                                
                            </div>
                        </div>  -->

                        
                        
                    </div>
                </div>
                 <div class="col-lg-5">

                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <h2>Register Here!</h2>
                        <form class="py-5" action="CustomerRegister.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" name="txtname" placeholder="Enter Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control border-0 p-4" name="txtphone" placeholder="Enter Your Phone Number" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" name="txtemail"placeholder="Enter Your Email" required="required" />
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control border-0 p-4" name="txtpassword" placeholder="Create Your Password" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" name="txtaddress" placeholder="Enter Your Address" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control border-0 p-5" name="filecustomerimg"  placeholder="Upload Your Image" required="required" />
                            </div>
                           
                            
                            <div class="form-group" >
                                <label  >
                                        <input type="checkbox" onclick="$(this).attr('disabled','disabled');" >
                                        <span class="checkmark text-white"><span>&nbsp;</span>I'm not a robot</span>
                                        <img src="img/Capture1.png" width="60px" height="50px">reCAPTCHA

                                    
                                    </label>

                                    

                            </div>
                               <input  class=" btn-lg btn-success" type="submit" name="btnRegister" value="Register" />
                                <input  class=" btn-lg btn-danger" type="reset" name="btnclear" value="Cancel" />
                                </form>
                           </div>
                               
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid bg-light pt-5 pb-4">
        
    </div>
    <!-- Pricing Plan End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white">(HGE)</h1>
                <p class="m-0"><span class="text-primary">Home Gym Equipment</span></p>
                <a href="/HGE/CustomerRegister.php">You Are At Register Page. </a>
                <p class="m-0"></p>
                
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
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                            </div>
                        </form>
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