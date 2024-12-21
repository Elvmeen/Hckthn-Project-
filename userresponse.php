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

// Ensure POST data is set
if (isset($_POST["name"], $_POST["profession"], $_POST["feedback"])) {
    $name = $_POST["name"];
    $profession = $_POST["profession"];
    $feedback = $_POST["feedback"];
} else {
    die("Error: Missing form data.");
}

// Function to generate tracking ID
function generateTrackingID() {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $tracking_id = '';
    $max_length = 10;

    for ($i = 0; $i < $max_length; $i++) {
        $tracking_id .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $tracking_id;
}

// Generate tracking ID
$tracking_id = generateTrackingID();

// SQL query to insert data into database
$sql = "INSERT INTO customerdetails2 (name, profession, feedback, tracking_id) VALUES (?, ?, ?, ?)";

// Prepare SQL statement
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die("Error in SQL preparation: " . mysqli_error($conn));
}

// Bind parameters to SQL statement
mysqli_stmt_bind_param($stmt, "ssss", $name, $profession, $feedback, $tracking_id);

// Execute SQL statement
if (!mysqli_stmt_execute($stmt)) {
    die("Execution failed: " . mysqli_stmt_error($stmt));
}

// Confirm success (remove in production)
echo "Data successfully inserted! Tracking ID: " . $tracking_id;

// Redirect user to thank you page
header('Location: index.html');
exit;

?>