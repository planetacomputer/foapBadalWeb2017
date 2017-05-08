<?php
require_once("Coche.php");
require_once("Bombilla.php");
require_once("Cd.php");


function enciende_algo (Encendible $algo){ 
   	$algo->encender(); 
} 

$mibombilla = new Bombilla(); 
$micoche = new Coche(); 
$cd = new Cd(); 

enciende_algo($mibombilla); 
enciende_algo($micoche);
//Aquest no s'executa perque no implementa la interficie!
enciende_algo($cd);