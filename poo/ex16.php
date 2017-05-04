*<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	abstract class Treballador{
		protected $nom;
  		protected $sou;

  		public function imprimir(){
  			return $this->nom." ".$this->sou."<br>";
  		}

  		public abstract function calcularSueldo();
	}

	class Empleat extends Treballador{
		private $horasTrabajadas; 
		private $valorHora;

		public function __construct($nom, $horasTrabajadas, $valorHora = 3.50){
			$this->nom = $nom;
			$this->horasTrabajadas = $horasTrabajadas;
			$this->valorHora = $valorHora;
		}

		public function calcularSueldo(){
			$this->sou = $this->horasTrabajadas*$this->valorHora;
		}
	}

	class Gerent extends Treballador{
		private $utilities;
		private $percentatge;

		public function __construct($nom, $utilities, $percentatge = 0.10){
			$this->nom = $nom;
			$this->utilities = $utilities;
			$this->percentatge = $percentatge;
		}

		public function calcularSueldo(){
			$this->sou = $this->utilities*$this->percentatge;
		}
	}

	$empleat = new Empleat("Empleat1", 230);
	$empleat->calcularSueldo();
	echo $empleat->imprimir();

	$gerent = new Gerent("Gerent1", 22230);
	$gerent->calcularSueldo();
	echo $gerent->imprimir();
	
?>
</body>
</html>