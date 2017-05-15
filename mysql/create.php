<?php
$servername = "mysql-geronimost.alwaysdata.net";
$username = "129644_pepe";
$password = "1111";
$dbname = "geronimost_mydb";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
/*$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/
$conn->close();
?>