<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-container">
<?php $n = $_GET['num'] ?>

<table class="w3-table-all w3-hoverable">
<caption>Taula del <?php echo $n ?></caption>

<?php for ($x = 1; $x <= 10; $x++): ?>
  <tr><td><?php echo $n ?> per <?php echo $x ?> es <span class="w3-tag w3-blue"><?php echo $n*$x ?></span>
  	<div class="w3-tag w3-orange">
		<?php if($n*$x%2 == 0): ?>
			PARELL
		<?php else: ?>
			SENAR
		<?php endif ?>
	</div>
  </td></tr>
<?php endfor ?>
</table>

</body>
</html>