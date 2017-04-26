<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

$arr = array("Jani", "HegSe", "Stale", "s ai Jim", "Borge", "Sabrina"); ?>
<div class="w3-container">
<?php foreach ($arr as $value): ?>
	<?php if(stripos($value, "s") === 0): ?>
		<div class="w3-panel w3-card"><p><?php echo familyName($value) ?></p></div>
	<?php endif ?>
<?php endforeach ?>
</div>
</body>
</html>