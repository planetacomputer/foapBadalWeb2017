<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edad;
  public function __construct($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getEdad()
  {
    return $this->edad;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function setEdad($edad){
    $this->edad = $edad;
  }

}

$persona1=new Persona('Juan',20);

$x=$persona1;
echo 'Datos de la persona ($persona1):';
echo $persona1->getNombre().' - '.$persona1->getEdad().'<br>';
echo 'Datos de la persona ($x):';
echo $persona1->getNombre().' - '.$persona1->getEdad().'<br>';

$x->setNombre('Ana');
$x->setEdad(25);
echo 'Después de modificar los datos<br>';
echo 'Datos de la persona ($persona1):';
echo $persona1->getNombre().' - '.$persona1->getEdad().'<br>';
echo 'Datos de la persona ($x):';
echo $persona1->getNombre().' - '.$persona1->getEdad().'<br>';
//Ara fem una asignacio pero per valor
$persona2=clone($persona1);
$persona1->setNombre('Luis');
$persona1->setEdad(50);
echo 'Después de modificar los datos de persona1<br>';
echo 'Datos de la persona ($persona1):';
echo $persona1->getNombre().' - '.$persona1->getEdad().'<br>';
echo 'Datos de la persona ($persona2):';
echo $persona2->getNombre().' - '.$persona2->getEdad().'<br>';
?>
</body>
</html>