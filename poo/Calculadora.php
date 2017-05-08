<?php
class Calculadora{
	public static $contador = 0;

	function __construct(){
		self::$contador++;
	}

	function getContador(){
		return self::$contador;
	}

	function setContador($num){
		self::$contador += $num;
	}

	public static function suma($x, $y){
		return $x + $y;
	}

	public static function resta($x, $y){
		return $x - $y;
	}

	public static function multiplicacio($x, $y){
		return $x * $y;
	}

	static function divisio($x, $y){
		return $x / $y;
	}
}

$calc = new Calculadora();
echo $calc->suma(3, 4);

echo "Suma: ".Calculadora::suma(3, 4)."<br>";
echo "Resta: ".Calculadora::resta(3, 4)."<br>";
echo "multiplicacio: ".Calculadora::Multiplicacio(3, 4)."<br>";
echo "Divisio: ".Calculadora::divisio(3, 4)."<br>";
//Una classe que conté mètodes static
//també es podria instanciar
$calc2 = new Calculadora();
//Mostrar la variable static $contador
echo Calculadora::$contador."<br>";
//Crida al metode getter de contador
echo $calc->getContador()."<br>";
//Un objecte modifica contador
$calc->setContador(10);
//i un altre objecte obte el valor
//tal i com el primer l'havia deixat.
//Per tant és una variable de classe,
//i no pròpia de la instància
echo $calc2->getContador();