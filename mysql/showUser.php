<!DOCTYPE html>
<html lang="en" id="">
<head>
	<meta charset="UTF-8">
	<title>Usuari <?php echo $_GET["id"] ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
$sql = "SELECT * FROM MyGuests WHERE id = ".$_GET["id"]. " LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
	<div class="w3-card-4">

		<header class="w3-container w3-teal">
		  <h1><?php echo $row['id'] ?></h1>
		</header>

		<div class="w3-container">
		  <p><?php echo $row['firstname'] ?></p>
		</div>
		<div class="w3-container">
		  <p><?php echo $row['lastname'] ?></p>
		</div>
		<div class="w3-container">
		  <p><?php echo $row['email'] ?></p>
		</div>
		<div class="w3-container">
		  <p><?php echo $row['reg_date'] ?></p>
		</div>
		<footer class="w3-container w3-teal">
		  <h5>Footer</h5>
		</footer>

	</div>
</body>
</html>