<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php
	class Persona{
		protected $nom;
		protected $edat;

		public function __construct($nom, $edat){
			$this->nom = $nom;
			$this->edat = $edat;
		}


		public function imprimir(){
			return strtoupper($this->nom)." ".$this->edat;
		}
	}


	class Empleat extends Persona{
		private $sou;

		public function __construct($nom, $edat, $sou){
			parent::__construct($nom, $edat);
			$this->sou = $sou;
		}

		public function carregarSou($sou){
			$this->sou = $sou;
		}

		public function imprimir(){
			return parent::imprimir()." ".$this->sou;
		}

	}

	$empleat = new Empleat("Pere", 34, 1000);
	echo $empleat->imprimir();
?>
</body>
</html>