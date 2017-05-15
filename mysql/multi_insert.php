<?php
require_once("dadesConnexio.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$persones = array
  (
  array('John', 'Doe', 'john@example.com'),
  array('Mary', 'Moe', 'mary@example.com'),
  array('Julie', 'Dooley', 'julie@example.com')
  );

  $sql = "";
 for ($i=0; $i < count($persones); $i++) { 
 	$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('".$persones[$i][0]."', '".$persones[$i][1]."', '".$persones[$i][2]."');";
 }



if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>