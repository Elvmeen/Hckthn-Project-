<?php
        session_start();
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tracking - PL-WASTEMGT</title>
    
    <meta content="Tracking- PLSWASTEMGT" name="keywords">
    <meta content="Waste Mgt Company" name="description">

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
            <h1 class="text-white display-3">TRACKING DETAILS</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.html">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    
<!-- Contact Start -->

<div class="container form-status-message">
    <?php
        
        // Include database connection details
        $host = "localhost";
        $username = "amimuh92_elanodb";
        $password = "Alameenu@111";
        $dbname = "amimuh92_elanodb";

        // Connect to the database
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Check connection
        if (mysqli_connect_errno()) {
            die("Connection error: " . mysqli_connect_error());
        } 

        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $search_id = $_POST['tracking_id'];

            // Query to retrieve the user information based on the tracking ID
            $sql = "SELECT name, tracking_id, destination, phonenumber FROM customerdetails WHERE tracking_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $search_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($name, $tracking_id, $destination, $phonenumber);

            if ($stmt->num_rows > 0) {
                while ($stmt->fetch()) {
                    echo "<h2>Dear $name, </h2>";
                    echo "<p><strong>Thank you for using our services!</strong></p>";
                    echo "<ul>";
                    echo "<li>Your Unique Tracking ID is: $tracking_id</li>";
                    echo "<li>Your Shipment Destination is: $destination</li>";
                    echo "<li>Your Phone Number is: $phonenumber</li>";
                    echo "</ul>";
                    echo "<p>Rest assured, your service is on its way and <strong>will be dispatched soon.</strong> We will keep you updated on the status of your service. If you have any questions, feel free to <a href='contact.html'> Contact us. </a> We appreciate your trust!</p>";
        
                }
            } else {
                echo "<p>No results found for the tracking ID: $search_id</p>";
            }

            $stmt->close();
        }

        $conn->close();
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
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, Rayfield Jos, PLA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+2348125412914</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@plswastemgt.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>Stay informed about the latest updates on our waste management services, special offers, and environmental news! Subscribe to our newsletter today to receive timely updates and exclusive insights into sustainable practices.</p>
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
                <p class="m-0 text-white">&copy; <a href="#">PLS Waste Mgt</a>. All Rights Reserved. 
				
				<!--/*** keep the footer author?s credit link/attribution link/backlink. If you'd like to use the  without the footer author?s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
				
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
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