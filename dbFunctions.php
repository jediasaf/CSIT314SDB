<?php

$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname = "testDB";

// Create connection
$conn = new mysqli($servername, $dbusername, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
#echo "Connected successfully";
?>



