<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); ?>

	<?php foreach($age as $clau => $valor): ?>
		<span>Key=<?php echo $clau ?></span>, <span>Value=<?php echo $valor ?></span><br>
	<?php endforeach ?>
</body>
</html>