<!DOCTYPE html>
<html>
<title>Llistat d'usuaris</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php
require_once("dadesConnexio.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
?>
<div class="w3-container">
  <h2>Llistat d'usuaris</h2>
<?php if ($result->num_rows > 0): ?>
  <h2>S'han trobat <?php echo $result->num_rows ?> usuaris</h2>
  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><a href="showUser.php?id=<?php echo $row['id'] ?>"><span class="w3-badge w3-green"><?php echo $row['id'] ?></span></a></td>
      <td><?php echo $row['firstname'] ?></td>
      <td><?= $row['lastname'] ?></td>
    </tr>
  <?php endwhile ?>
  </table>
<?php else: ?>
  No s'han trobat resultats
<?php endif ?>
</div>

</body>
</html> 
