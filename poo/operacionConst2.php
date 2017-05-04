<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function __construct($v1,$v2)
  {
    echo "constr pare";
    $this->valor1=$v1;
    $this->valor2=$v2;
  }
  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  protected $titulo;
  public function __construct($v1,$v2)
  {
    echo "constr filla";
    parent::__construct($v1,$v2);
    //$this->titulo=$tit;
  }
  public function operar()
  {
    echo $this->titulo;
    echo $this->valor1.'+'.$this->valor2.' es ';
    $this->resultado=$this->valor1+$this->valor2;
  }
}

$suma=new Suma(10,10);
$suma->operar();
$suma->imprimirResultado();
?>