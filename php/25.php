<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(4, 6, 2, 22, 11);
$numbers2 = $numbers;
sort($numbers);

$arrlength = count($numbers);
print_r($numbers);
foreach($numbers as $index=>$value) {
    echo $index."-".$value;
    echo "<br>";
}
print_r($numbers2);
?>

</body>
</html>