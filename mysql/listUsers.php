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
<div class="w3-panel w3-border w3-light-grey w3-round-large">
  <h2>Llistat d'usuaris</h2>
</div>
  
<?php if ($result->num_rows > 0): ?>
  <h2>S'han trobat <?php echo $result->num_rows ?> usuaris</h2>
  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><a href="showUser.php?id=<?php echo $row['id'] ?>"><span class="w3-badge w3-green"><?php echo $row['id'] ?></span></a></td>
      <td><?php echo $row['firstname'] ?></td>
      <td><?= $row['lastname'] ?></td>
      <td><a  onclick="return confirmar()" id="esborrar" href="delete.php?id=<?php echo $row['id'] ?>" class="w3-btn w3-ripple w3-red">Esborrar</a></td>
      <td><a href="editar.php?id=<?php echo $row['id'] ?>" class="w3-btn w3-ripple w3-yellow">Editar</a></td>
    </tr>
  <?php endwhile ?>
  </table>
  <a href="insertUser.php" class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-teal" style="z-index:0">+</a>
<?php else: ?>
  No s'han trobat resultats
<?php endif ?>
</div>
<script>
  function confirmar() {
      return confirm("Realment vols esborrar");
  }
</script>
</body>
</html>