<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
include("celda.php");
class Tabla {
  private $mat=array(); //array bidimensional de celdas
  private $cantFilas;
  private $cantColumnas;

  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  public function cargar($fila,$columna,$celda)
  {
    $this->mat[$fila][$columna]=$celda;
  }

  private function inicioTabla()
  {
    echo '<table border="1">';
  }
    
  private function inicioFila()
  {
    echo '<tr>';
  }

  private function mostrar($fi,$co)
  {
    echo $this->mat[$fi][$co]->mostrarCelda();
  }

  private function finFila()
  {
    echo '</tr>';
  }

  private function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

$fils = 6;
$cols = 9;
$contador = 1;
$tabla1=new Tabla($fils,$cols);
$colorParell = "#F00";
$colorSenar = "#0F0";
$colorAux = "";
for($f=1; $f<=$fils; $f++){
  for($c=1; $c<=$cols; $c++){
    //Instanciar una celda
    $colorAux = $colorSenar;
    if($contador % 2 == 0){
      $colorAux = $colorParell;
    }
    $celda = new Celda($contador, "#00F", $colorAux);
    $tabla1->cargar($f, $c, $celda); 
    $contador++;
  }  
}

$tabla1->graficar();
?>
</body>
</html>