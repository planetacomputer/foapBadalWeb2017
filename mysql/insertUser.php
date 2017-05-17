<!DOCTYPE html>
<html lang="en" id="">
<head>
	<meta charset="UTF-8">
	<title>Usuari nou</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.back{
			margin-top: 10px;
		}
	</style>
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('".$firstname."', '".$lastname."', '".$email."')";

    //echo $sql;
    $aux = $conn->query($sql);
    if ($aux === TRUE) {
	    echo "Record updated successfully";
	    $last_id = $conn->insert_id;
	    header("Location: editar.php?id=".$last_id);
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$conn->close();
}

?>
	<div class="w3-card-4">

		<header class="w3-container w3-teal">
		  <h1>Nou usuari</h1>
		</header>
		<form action="insertUser.php" method="POST">
			<div class="w3-container">
			  <p><input type="text" name="firstname" value=""></p>
			</div>
			<div class="w3-container">
			  <p><input type="text" name="lastname" value=""></p>
			</div>
			<div class="w3-container">
			  <p><input type="text" name="email" value=""></p>
			</div>
			<input type="hidden" name="id" value="">
			
	 		 <input type="submit" value="Submit">
		</form>

		
		<footer class="w3-container w3-teal">
		  <h5>Footer</h5>
		</footer>
	
	</div>
	<a href="listUsers.php" class="w3-btn w3-block w3-khaki back">Tornar al llistat</a>
</body>
</html>