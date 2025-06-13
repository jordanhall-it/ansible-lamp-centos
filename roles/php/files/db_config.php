<?php
$servername = "localhost";
$username = "sqladmin";
$password = "sqlpass";
$dbname = "sampledb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "✅ Connected to the MySQL database successfully!";
?>

