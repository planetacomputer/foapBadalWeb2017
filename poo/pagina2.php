<html>
<head>
<title>Empleado impuestos</title>
</head>
<body>
<?php
class Empleado {
  private $nom;
  private $sou;
  public function inicializar($nom, $sou)
  {
    $this->nombre=$nombre;
    $this->sou = $sou;
  }
  public function pagaImpostos()
  {
    echo $this->nombre."-";
    if($this->sou > 3000){
      echo "SI paga impostos";
    }
    else{
      echo "NO paga impostos";
    }
    echo "<br>";
  }
}

$empleado1 = new Empleado();
$empleado1->inicializar("Pere", 4000);
$empleado1->pagaImpostos();

$empleado2 = new Empleado();
$empleado2->inicializar("Pere", 2000);
$empleado2->pagaImpostos();

?>

</body>
</html>