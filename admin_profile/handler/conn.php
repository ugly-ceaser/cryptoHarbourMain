<?php


$servername = "localhost";
$username = "capildpro_dev";
$password = "marti08139110216";
$dbname = "capildpro_Data";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>