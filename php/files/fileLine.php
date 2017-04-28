<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
$numLinies = 0;
while(!feof($myfile)) {
  $linea = fgets($myfile);
  echo $linea . " | " . strlen($linea) ."<br>";
  $numLinies++;
}
fclose($myfile);
?>
El nombre de linies es <?php echo $numLinies ?>