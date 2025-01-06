<?php
// Database credentials
$host = 'localhost:3306';
$username = 'root';
$password = 'admin'; // Leave blank for default WAMP installation
$dbname = 'fmb';

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!<br>";
?>
