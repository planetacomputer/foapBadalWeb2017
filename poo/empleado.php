<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php
	abstract class Persona{
		protected $nom;
		protected $edat;

		public function carregarNom($nom){
			$this->nom = $nom;
		}

		public function carregarEdat($edat){
			$this->edat = $edat;
		}

		public function imprimir(){
			return strtoupper($this->nom)." ".$this->edat;
		}
	}


	class Empleat extends Persona{
		private $sou;

		public function carregarSou($sou){
			$this->sou = $sou;
		}

		public function imprimir(){
			return parent::imprimir()." ".$this->sou;
		}

	}

	$empleat = new Empleat();
	$empleat->carregarNom("Pere");
	$empleat->carregarEdat(34);
	$empleat->carregarSou(1000);
	echo $empleat->imprimir();

	$persona = new Persona();
?>
</body>
</html>