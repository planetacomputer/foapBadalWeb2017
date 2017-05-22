<?php
use Acme\Car\CarIntro as CarIntro1;
use Acme\Vehicles\Cars\CarIntro as CarIntro2;

// 1. Require the namespaced file
require "src/Car/CarIntro.php";
require "src/Vehicles/Cars/CarIntro.php";

//$car = new CarIntro();
$car = new CarIntro1();
echo $car->sayHello();

$car2 = new CarIntro2();
echo $car2->sayHello();