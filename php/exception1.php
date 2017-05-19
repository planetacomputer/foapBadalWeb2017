<?php
phpinfo();
class FuelEconomy {
	// Calculate the fuel efficiency
	public function calculate($distance, $gas){
		if($gas <= 0 ){
			// Throw custom error message, instead of an error
			throw new Exception("The gas consumption cannot be less than
			or equal to zero. You better drink coffee or take a break.");
		}
		return $distance/$gas;
	}
}


// The data to feed the class with
$dataFromCars = array(
	array(50,10),
	array(50,0),
	array(50,-3),
	array(30,5)
);
// Create the object from the class and feed it
// with the array values
foreach($dataFromCars as $data => $value){
	$fuelEconomy = new FuelEconomy();
	// Try block handles the normal data
	try{
		echo $fuelEconomy -> calculate($value[0],$value[1]) . "<br />";
	}
	// Catch block handles the exceptions
	catch (Exception $e){
		// Echo the custom error message
		echo "Message: " . $e -> getMessage() . "<br /> Nom fitxer excepcio: ".$e->getFile(). "<br /> Linia: ".$e->getLine(). "<br />";
	}
}