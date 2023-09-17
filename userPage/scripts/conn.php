<?php
// $servername = "localhost";
// $username = "hkfrxrqsah_admin";
// $password = "marti08139110216";
// $dbname = "hkfrxrqsah_Data";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
