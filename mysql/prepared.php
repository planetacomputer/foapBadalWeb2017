<?php
require_once("dadesConnexio.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Pere";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Joan";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Laura";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>