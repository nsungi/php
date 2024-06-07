

<?php
$servername = "localhost";
$username = "admin1";
$password = "admin123";
$dbname = "medium_market";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>