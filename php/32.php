<?php
//Exemple de personalitzacio de la funcio de comparacio
function my_sort($a,$b){
	if($a%2==0 && $b%2==0)
		return 0;

	if($a%2==0 && $b%2==1)
		return -1;
	else
		return 1;
}

$a=array(1,4,3,2,11,8,6,7,-3,-4);
usort($a,"my_sort");
foreach(array_values($a) as $value)
  echo $value . "<br>";

?>