<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body  class="w3-container">

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

$sold = 0;
for ($row = 0; $row < 4; $row++): ?>
  <?php if($cars[$row][1] > 10): ?>
	  <p><b>Row number <?php echo $row ?></b></p>
	  <ul class="w3-ul">
	  <?php for ($col = 0; $col < 3; $col++): ?>
	    <li><?php echo $cars[$row][$col] ?></li>
	  <?php endfor; $sold += $cars[$row][2]; ?>
	  </ul>
  <?php endif ?>
<?php endfor ?>
<div class="w3-panel w3-yellow">S'han venut <?php echo $sold ?> cotxes en total
</body>
</html>