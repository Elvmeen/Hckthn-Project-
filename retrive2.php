<?php
// Disable error reporting
error_reporting(0);

// Start session
session_start();

// Your session-related code here
// Ensure session variables are set before using them
if (!isset($_SESSION['username']) || !isset($_SESSION['tracking_id'])) {
    echo "Error: Session variables not set.";
    exit; // Terminate script execution
}

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
$username = $_SESSION['username'];
$tracking_id = $_SESSION['tracking_id'];

// Display personalized thank you message
echo "<h1>Thank you, $username, for registering with us!</h1>";
echo "<p>Your unique tracking ID is: $tracking_id</p>";

// Clear session variables (optional)
unset($_SESSION['username']);
unset($_SESSION['tracking_id']);
?>
