<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
  $linea = fgets($myfile);
  if(str_starts_with($linea, "S"))
  	echo $linea . "<br>";
}

fclose($myfile);

function str_starts_with($haystack, $needle){
    return strpos($haystack, $needle) === 0;
}