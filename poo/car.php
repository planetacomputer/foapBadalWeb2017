<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
class Car {
	// The private access modifier denies access to the
	// method from outside the class’s scope
	private $model;
	private $allowedModels = array("Mercedes", "Volvo", "Toyota");

	// A constructor method
	public function __construct($model){
		$this->model = $model;
	}
	// The public access modifier allows the access to
	// the method from outside the class
	public function setModel($model){
		// Validate that only certain car models are assigned
		// to the $carModel property
		if(in_array($model, $this->allowedModels)){
			return " The <b>" . __class__ . "</b> model is: ".$this->model;
		}
	}

	public function getModel(){
		return " The <b>".__CLASS__."</b> model is: ".$this->model." Linia: ".__LINE__." i es troba al fitxer ".__FILE__;
	}
}

$mercedes = new Car("Mercedes");
// Set the car’s model
$mercedes->setModel("Mercedes");
// Get the car’s model
echo $mercedes->getModel();

?>