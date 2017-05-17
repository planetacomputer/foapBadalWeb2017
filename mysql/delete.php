<!DOCTYPE html>
<html lang="en" id="">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
require_once("dadesConnexio.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE FROM MyGuests WHERE id = ".$_GET["id"];
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
header('Location: listUsers.php');
?>
</body>
</html>