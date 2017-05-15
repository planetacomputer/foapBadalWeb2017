<?php
$servername = "mysql-geronimost.alwaysdata.net";
$username = "129644_pepe";
$password = "1111";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>