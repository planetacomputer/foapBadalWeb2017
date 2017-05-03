<?php
class User {
	private $firstName;
	private $lastName;  

	public function __construct($firstName, $lastName){
		$this->firstName = $firstName;
		$this->lastName = $lastName;		
	}

	public function getFullName(){
		return $this->firstName." ".$this->lastName;
	}
}

$usuario = new User("Pedro", "Garcia");
echo $usuario->getFullName()."<br>";
$usuario2 = new User("Jose", "Perez");
echo $usuario2->getFullName();
?>