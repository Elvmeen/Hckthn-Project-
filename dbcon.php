<?php
session_start();
// Include database connection details
$host = "localhost";
$username = "id22059714_jjlogistics";
$password = "Alameenu@111";
$dbname = "id22059714_jjweb";

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
} 

// Retrieve user's name and tracking ID from session variables
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$tracking_id = isset($_SESSION['tracking_id']) ? $_SESSION['tracking_id'] : "";

// Display personalized thank you message if session variables are set
if (!empty($username) && !empty($tracking_id)) {
    echo "<h1>Thank you, $username, for registering with us!</h1>";
    echo "<p>Your unique tracking ID is: $tracking_id</p>";
} else {
    echo "<p>Error: Session variables not set.</p>";
}

// Clear session variables (optional)
//unset($_SESSION['username']);
//unset($_SESSION['tracking_id']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JJLog - Logistics Company Website Template</title>
    
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">YOUR TRACKING ID</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.html">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    
<!-- Contact Start -->

<!-- Thank You Message -->
<div class="container form-status-message">
    
    // Display personalized thank you message if session variables are set

<?php
if (!empty($username) && !empty($tracking_id)) {
    echo "<h1>Thank you, $username, for registering with us!</h1>";
    echo "<p>Your unique tracking ID is: $tracking_id</p>";
} else {
    echo "<p>Error: Session variables not set.</p>";
}

// Clear session variables (optional)
//unset($_SESSION['username']);
//unset($_SESSION['tracking_id']);
?>

<a href="index.html">Go back</a>
</div>

<!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@jjlogistics.com</p>
                        
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>Looking for the latest updates on our services, special offers, and industry news? Subscribe quickly to our newsletter today to receive updatesand enjoy!</p>
                
                <form action="https://formspree.io/f/xqkrnrvo" method="POST">
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" name="email" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">JJLogistics</a>. All Rights Reserved. 

                </p>
            
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>