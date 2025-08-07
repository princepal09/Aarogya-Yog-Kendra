<?php
$host = "localhost";  // Database host, usually "localhost"
$username = "u441755020_aarogya_yoga_";  // Your MySQL username
$password = "Princepal@774623";  // Your MySQL password
$database = "u441755020_aarogya_yogaDB";  // Your MySQL database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    // Log the error but don't display it in production
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed. Please try again later.");
}

// If you're testing, uncomment the next line
// echo "Connected successfully";
?>
