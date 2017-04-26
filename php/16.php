<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = 10;

switch ($favcolor) {
    case $favcolor<3:
        echo "Molt petit";
        break;
    case $favcolor<5:
        echo "Petit";
        break;
    case $favcolor<=7:
        echo "Gran";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>