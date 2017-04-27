<!DOCTYPE html>
<html>
<body>

<?php
function test_odd($var)
{

echo ($var."-".$var % 2);
if($var % 2 == 0)
	return(1);
}

$a1=array(2122, 212, 2,3,4,5);
print_r(array_filter($a1,"test_odd"));
?>

</body>
</html>