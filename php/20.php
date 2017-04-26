<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php $cars = array("Volvo", "BMW", "Toyota"); ?>
	<span class="clase1">
	I like <?php echo $cars[0]  ?>, <span class="clase2"><?php echo $cars[1] ?></span> and <?php echo $cars[2] ?>
	<?php echo count($cars); ?>
	</span>

</body>
</html>