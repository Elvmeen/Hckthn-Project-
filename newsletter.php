<?php
$host = "localhost";
$username = "id22059714_jjlogistics";
$password = "Alameenu@111";
$dbname = "id22059714_jjweb";

//connect to db
$conn = mysqli_connect($host, $username, $password, $dbname);


//check connection    
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
} 
        
$name = $_POST["name"];
$email = $_POST["email"];
$phonenumber = $_POST["email"];
$cargoytype = $_POST["email"];
$countryoforigin = $_POST["email"];
$destination = $_POST["email"];
$quantity = $_POST["email"];
$weight = $_POST["email"];
$width = $_POST["email"];
$height = $_POST["email"];


$sql = "INSERT INTO customerdetails (name, email, phonenumber, cargotype, countryoforigin, destination, quantity weight, width, height)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssssssss",
                       $name,
                       $email,
                       $phonenumber,
                       $cargoytype,
                       $countryoforigin,
                       $destination,
                       $quantity,
                       $weight,
                       $width,
                       $height);

mysqli_stmt_execute($stmt);

header('Location: thanks.html');