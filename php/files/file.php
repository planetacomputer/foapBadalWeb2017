<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
for($x=0; $x<filesize("webdictionary.txt"); $x++){
	$c = fread($myfile, 1);
	if($c=='a' || $c=='e' || $c=='i' || $c=='o' || $c=='u' || $c=='A' || $c=='E' || $c=='I' || $c=='O' || $c=='U'){
	//if(preg_match("/^[AEIOUaeiou]*$/", $c)){
		echo " ";
	}
	else{
		echo $c;
	}
}
fclose($myfile);
?>