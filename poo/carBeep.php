<?php
class Car {
	public function hello()
	{
		return "beep";
	}
}
// The child class has hello method that returns "Hallo"
class SportsCar extends Car {
	public function hello()
	{
		return parent::hello()." Hallo";
	}
}
// Create a new object
$sportsCar1 = new SportsCar();
// Get the result of the hello method
echo $sportsCar1 -> hello();