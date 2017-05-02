<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $colorText;
  public function inicializar($tit,$ubi, $colorText)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->colorText=$colorText;
  }
  public function graficar()
  {
    echo "<div style='color:".$this->colorText.";font-size:40px;text-align:".$this->ubicacion."'>";
    echo $this->titulo;
    echo "</div>";
  }
}

$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','left', '#F00');
$cabecera->graficar();
?>
</body>
</html> 