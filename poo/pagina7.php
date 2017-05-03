<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Opcion {
  private $titulo;
  private $enlace;
  private $colorFondo;
  public function __construct($tit,$enl,$cfon)
  {
    $this->titulo=$tit;
    $this->enlace=$enl;
    $this->colorFondo=$cfon;
  }

  public function getTitulo(){
    return $this->titulo;
  }

  public function graficar()
  {
    echo '<a style="background-color:'.$this->colorFondo.
         '" href="'.$this->enlace.'">'.$this->titulo.'</a>';
  }
}

class Menu {
  private $opciones=array();
  private $direccion;
  public function __construct($dir)
  {
    $this->direccion=$dir;
  }
  public function insertar($op)
  {
    //Abans de fer la insercio comprovem que 
    //no hi hagi cap altre element amb el mateix titol
      //Inserto la nova opcio
      $this->opciones[] = $op;

      //Nomes si hi ha mes d'una opcio a l'array es
      //poden cercar repeticions
      if(count($this->opciones)>1){
        //Iterem l'array d'opcions fins a la penultima opcio
        //perque la darrera es la que acabem d'inserir
        for ($i = 0; $i < count($this->opciones) - 1; $i++) {
          //Si coincideix qualsevol dels titols de les opcions
          //amb el titol de la passada per parametre, aleshores
          //eliminem l'opcio repetida que acabem d'inserir 
          if($this->opciones[$i]->getTitulo() == $op->getTitulo()){
            array_pop($this->opciones);
          }
        }
      }
    
  }
  private function graficarHorizontal()
  {
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
    }
  }
  private function graficarVertical()
  {
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
      echo '<br>';
    }
  }
  public function graficar()
  {
    if (strtolower($this->direccion)=="horizontal")
      $this->graficarHorizontal();
    else
      if (strtolower($this->direccion)=="vertical")
        $this->graficarVertical();
  }
}

$menu1=new Menu('vertical');
$opcion1=new Opcion('Google','http://www.google.com','#C3D9FF');
$menu1->insertar($opcion1);
$opcion2=new Opcion('Yahoo','http://www.yahoo.com','#CDEB8B');
$menu1->insertar($opcion2);
$opcion3=new Opcion('MSN','http://www.msn.com','#C3D9FF');
$menu1->insertar($opcion3);
$opcion4=new Opcion('MSN','http://www.msn.com','#C3D9FF');
$menu1->insertar($opcion4);
$opcion5=new Opcion('Google','http://www.google.com','#C3D9FF');
$menu1->insertar($opcion5);
$menu1->graficar();
?>
</body>
</html>