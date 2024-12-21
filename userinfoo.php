<?php
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

// Retrieving form data
$name = $_POST["name"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$cargotype = $_POST["cargotype"];
$countryoforigin = $_POST["countryoforigin"];
$destination = $_POST["destination"];
$quantity = $_POST["quantity"];
$weight = $_POST["weight"];
$width = $_POST["width"];
$height = $_POST["height"];

// Function to generate tracking ID
function generateTrackingID() {
    // Generate a random tracking ID (you can customize this based on your requirements)
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $tracking_id = '';
    $max_length = 10; // Maximum length for tracking ID

    // Generate a tracking ID within the specified length
    for ($i = 0; $i < $max_length; $i++) {
        $tracking_id .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $tracking_id;
}

// Generate tracking ID
$tracking_id = generateTrackingID();

// SQL query to insert data into database
$sql = "INSERT INTO customerdetails (name, email, phonenumber, cargotype, countryoforigin, destination, quantity, weight, width, height, tracking_id)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare SQL statement
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

// Bind parameters to SQL statement
mysqli_stmt_bind_param($stmt, "sssssssssss",
                       $name,
                       $email,
                       $phonenumber,
                       $cargotype,
                       $countryoforigin,
                       $destination,
                       $quantity,
                       $weight,
                       $width,
                       $height,
                       $tracking_id);

// Execute SQL statement
mysqli_stmt_execute($stmt);

// Redirect user to thank you page
header('Location: done.php');
?>