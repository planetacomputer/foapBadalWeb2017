<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  public $edat;
  public function inicializar($nombre, $edat)
  {
    $this->nombre=$nombre;
    $this->edat = $edat;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo '-';
    echo $this->edat;
    echo '<br>';
  }
}
//Variable numerica amb la suma de les edats
$edatTotal = 0;
//Creo array per emmagatzemar persones
$a = array();
$per1 = new Persona();
$per1->inicializar('Juan', 21);
$per1->imprimir();
array_push($a, $per1);
$per2 = new Persona();
$per2->inicializar('Ana', 34);
$per2->imprimir();
array_push($a, $per2);
foreach ($a as $persona) {
  $edatTotal += $persona->edat;
}

echo $edatTotal;
//echo count($a);
?>

</body>
</html>