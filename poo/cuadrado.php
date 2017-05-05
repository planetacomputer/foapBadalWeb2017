<?php
class Cuadrado{
	private $costat;
	private $perimetre;
	private $area;

	public function __construct($costat){
		$this->costat = $costat;
		$this->perimetre = 4*$costat;
		$this->area = pow($costat, 2);
	}

	public function getCostat(){
		return $this->costat;
	}

	public function setCostat($costat){
		$this->__construct($costat);
	}

	public function getPerimetre(){
		return $this->perimetre;
	}
	public function getArea(){
		return $this->area;
	}
}

$cuadrado = new Cuadrado(3);
echo "Perimetre: ".$cuadrado->getPerimetre()."<br>";
echo "Area: ".$cuadrado->getArea()."<br>";

//Copia per referencia
$cuadrado2 = $cuadrado;
//Copia per valor
$cuadrado3 = clone($cuadrado);

//modifiquem el $cuadrado original
$cuadrado->setCostat(4);
//$cuadrado2 es veu modificat
echo "Perimetre Cuadrado2: ".$cuadrado2->getPerimetre()."<br>";
echo "Area Cuadrado2: ".$cuadrado2->getArea()."<br>";

//Tanmateix $cuadrado3 roman igual
echo "Perimetre Cuadrado3: ".$cuadrado3->getPerimetre()."<br>";
echo "Area Cuadrado2: ".$cuadrado3->getArea()."<br>";