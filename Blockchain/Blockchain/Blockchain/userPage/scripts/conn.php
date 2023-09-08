<?php
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "jay";
// $servername = "localhost";
// $username = "fidenkoq_jay";
// $password = "marti08139110216";
// $dbname = "fidenkoq_jay";

// commented out te former database
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
