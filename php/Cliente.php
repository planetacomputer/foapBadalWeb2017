<?php
#final class ItemProducto {
class ItemProducto {
	#...
	//No es permeten propietats finals
	//serien constants
	#final $preu = 30;
	 protected function suma($x, $y){
		return $x+$y;
	}

}
class Producto extends ItemProducto {
	#...
	function suma($x, $y){
		return $x+$y;
	}
}

class Cliente {
	static public $nombre_completo = 'Cliente desconocido';
	public $id = 1001;
	function __construct() {
		self::$nombre_completo = 'Juan Pérez';
	}
}
//$cliente = new Cliente();
echo Cliente::$nombre_completo;
//echo Cliente::$id;
$cliente = new Cliente();
echo $cliente->id;
?>