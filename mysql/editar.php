<!DOCTYPE html>
<html lang="en" id="">
<head>
	<meta charset="UTF-8">
	<title>Usuari <?php echo $_GET["id"] ?></title>
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
	$sql = "UPDATE MyGuests SET firstname='".$_POST["firstname"]."', lastname='".$_POST["lastname"]."', email= '".$_POST["email"]."' WHERE id=".$_POST["id"];

    //echo $sql;
    if ($conn->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . $conn->error;
	}
}
$sql = "SELECT * FROM MyGuests WHERE id = ".$_GET["id"]. " LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
	<div class="w3-card-4">

		<header class="w3-container w3-teal">
		  <h1><?php echo $row['id'] ?></h1>
		</header>
		<form action="editar.php?id=<?php echo $_GET['id'] ?>" method="POST">
			<div class="w3-container">
			  <p><input type="text" name="firstname" value="<?php echo $row['firstname'] ?>"></p>
			</div>
			<div class="w3-container">
			  <p><input type="text" name="lastname" value="<?php echo $row['lastname'] ?>"></p>
			</div>
			<div class="w3-container">
			  <p><input type="text" name="email" value="<?php echo $row['email'] ?>"></p>
			</div>
			<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
			<div class="w3-container">
			  <p><?php echo $row['reg_date'] ?></p>
			</div>
	 		 <input type="submit" value="Submit">
		</form>

		
		<footer class="w3-container w3-teal">
		  <h5>Footer</h5>
		</footer>
	
	</div>
	<a href="listUsers.php" class="w3-btn w3-block w3-khaki back">Tornar al llistat</a>
</body>
</html>